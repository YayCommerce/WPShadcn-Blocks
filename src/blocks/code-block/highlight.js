/**
 * Small regex syntax highlighter, no library. Shared by edit.js (editor
 * preview) and view.js (frontend). Colors live in style.scss (.tok-*).
 *
 * ponytail: regex rules, not real grammars. Nested or unusual syntax can be
 * mis-colored; swap in Shiki (what shadcn uses) if exact colors matter.
 */

const JS_KEYWORDS =
  "as async await break case catch class const continue debugger default delete do else enum export extends finally for from function get if implements import in instanceof interface let new of package private protected public readonly return satisfies set static super switch this throw try type typeof var void while with yield";

export const LANGUAGES = {
  javascript: { comments: ["//", "/*"], strings: "\"'`", keywords: JS_KEYWORDS },
  typescript: { comments: ["//", "/*"], strings: "\"'`", keywords: JS_KEYWORDS },
  jsx: { comments: ["//", "/*"], strings: "\"'`", keywords: JS_KEYWORDS, tags: true },
  tsx: { comments: ["//", "/*"], strings: "\"'`", keywords: JS_KEYWORDS, tags: true },
  json: { strings: '"', keys: "json" },
  css: { comments: ["/*"], strings: "\"'", css: true },
  html: { comments: ["<!--"], strings: "\"'", tags: true },
  markdown: { comments: ["<!--"], strings: "`", tags: true, markdown: true },
  python: {
    comments: ["#"],
    strings: "\"'",
    keywords:
      "and as assert async await break class continue def del elif else except finally for from global if import in is lambda nonlocal not or pass raise return try while with yield",
  },
  bash: {
    comments: ["#"],
    strings: "\"'",
    keywords:
      "if then else elif fi for in do done while until case esac function return export local echo cd sudo",
    variables: true,
  },
  sql: {
    comments: ["--", "/*"],
    strings: "'\"",
    caseInsensitive: true,
    keywords:
      "select from where and or not insert into values update set delete create table drop alter add join left right inner outer on as group by order having limit offset distinct union all null is in like between case when then else end primary key foreign references index default",
  },
  yaml: { comments: ["#"], strings: "\"'", keys: "yaml" },
  diff: { diff: true },
};

const ALIASES = {
  js: "javascript",
  ts: "typescript",
  md: "markdown",
  py: "python",
  sh: "bash",
  shell: "bash",
  shellscript: "bash",
  zsh: "bash",
  yml: "yaml",
};

const escape = (s) => s.replace(/[.*+?^${}()|[\]\\]/g, "\\$&");

const COMMENTS = {
  "//": "//[^\\n]*",
  "#": "#[^\\n]*",
  "--": "--[^\\n]*",
  // An unclosed comment runs to the end of the code ("$" is end of line here).
  "/*": "/\\*[\\s\\S]*?(?:\\*/|(?![\\s\\S]))",
  "<!--": "<!--[\\s\\S]*?(?:-->|(?![\\s\\S]))",
};

// Build one sticky regex per language; each rule is a named group = token type.
const cache = {};
const compile = (name) => {
  const lang = LANGUAGES[name];
  const rules = [];
  const add = (type, source) => rules.push(`(?<${type}>${source})`);

  if (lang.diff) {
    add("inserted", "^\\+[^\\n]*");
    add("deleted", "^-[^\\n]*");
    add("meta", "^@@[^\\n]*");
  }
  if (lang.comments) {
    add("comment", lang.comments.map((c) => COMMENTS[c]).join("|"));
  }
  if (lang.keys === "json") {
    add("property", '"(?:\\\\.|[^"\\\\\\n])*"(?=\\s*:)');
  }
  if (lang.keys === "yaml") {
    add("property", "^[ \\t-]*[\\w.-]+(?=\\s*:)");
  }
  if (lang.strings) {
    const quotes = [...lang.strings].map((q) =>
      q === "`"
        ? "`(?:\\\\.|[^`\\\\])*`"
        : `${escape(q)}(?:\\\\.|[^${escape(q)}\\\\\\n])*${escape(q)}`
    );
    // Python triple-quoted strings first, so """ is not read as "" + ".
    if (name === "python") {
      quotes.unshift('"""[\\s\\S]*?"""', "'''[\\s\\S]*?'''");
    }
    add("string", quotes.join("|"));
  }
  if (lang.markdown) {
    add("keyword", "^#{1,6} [^\\n]*");
  }
  if (lang.tags) {
    // Matches "<div" / "</div"; tokenize() gives the "<" back as plain text.
    // No lookbehind: Safari < 16.4 throws on it.
    add("tag", "</?[A-Za-z][\\w.:-]*");
    add("attr", "\\b[A-Za-z_:][\\w:.-]*(?==)");
  }
  if (lang.css) {
    add("keyword", "@[\\w-]+");
    add("property", "[\\w-]+(?=\\s*:[^;{]*[;}])");
    add("number", "#[0-9a-fA-F]{3,8}\\b|-?\\d*\\.?\\d+(?:%|[a-z]+)?");
    add("function", "[\\w-]+(?=\\()");
    add("tag", "[.#]?[A-Za-z][\\w-]*(?=[^{};]*\\{)");
  }
  if (lang.variables) {
    add("variable", "\\$\\{[^}\\n]*\\}|\\$\\w+");
  }
  if (lang.keywords) {
    add("keyword", `\\b(?:${lang.keywords.split(" ").join("|")})\\b`);
  }
  if (!lang.css && !lang.diff) {
    add("constant", "\\b(?:true|false|null|undefined|None|True|False|NaN)\\b");
    add("number", "\\b(?:0x[\\da-fA-F]+|\\d[\\d_]*(?:\\.\\d+)?(?:[eE][+-]?\\d+)?)\\b");
  }
  if (lang.keywords && !lang.caseInsensitive) {
    add("function", "\\b[A-Za-z_$][\\w$]*(?=\\s*\\()");
  }

  return new RegExp(rules.join("|"), `gm${lang.caseInsensitive ? "i" : ""}`);
};

/**
 * Normalize a language name, or null when there is no highlighter for it.
 *
 * @param {string} language Language name or alias.
 * @return {string|null} Supported language key.
 */
const resolveLanguage = (language) => {
  const name = String(language || "").toLowerCase();
  return LANGUAGES[name] ? name : ALIASES[name] || null;
};

/**
 * Split code into lines of tokens. Text without a rule gets type "".
 *
 * @param {string} code     Plain code.
 * @param {string} language Language name or alias.
 * @return {Array<Array<{type: string, text: string}>>} One array per line.
 */
export const tokenize = (code, language) => {
  const name = resolveLanguage(language);
  const tokens = [];
  if (!name) {
    tokens.push({ type: "", text: code });
  } else {
    const regex = (cache[name] ??= compile(name));
    regex.lastIndex = 0;
    let last = 0;
    for (const match of code.matchAll(regex)) {
      if (match[0] === "") {
        continue;
      }
      if (match.index > last) {
        tokens.push({ type: "", text: code.slice(last, match.index) });
      }
      const type = Object.keys(match.groups).find((key) => match.groups[key]);
      const bracket = type === "tag" && match[0].match(/^<\/?/);
      if (bracket) {
        tokens.push({ type: "", text: bracket[0] });
      }
      tokens.push({ type, text: match[0].slice(bracket ? bracket[0].length : 0) });
      last = match.index + match[0].length;
    }
    if (last < code.length) {
      tokens.push({ type: "", text: code.slice(last) });
    }
  }

  // Multi-line tokens (block comments, template strings) are cut at each "\n".
  const lines = [[]];
  tokens.forEach(({ type, text }) =>
    text.split("\n").forEach((part, index) => {
      if (index > 0) {
        lines.push([]);
      }
      if (part !== "") {
        lines[lines.length - 1].push({ type, text: part });
      }
    })
  );
  return lines;
};
