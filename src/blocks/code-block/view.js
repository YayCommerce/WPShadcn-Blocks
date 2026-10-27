/**
 * Code Block: copy, wrap, download and "Show more" buttons. Plain script, no
 * store needed. Mirrors the shadcn examples' handlers.
 */
import { tokenize } from "./highlight";

const root = (el) => el.closest(".wp-block-shadcn-code-block");

// Line numbers and +/- markers are CSS; an empty line holds "\n" for selection.
const plainCode = (block) =>
  [...block.querySelectorAll(".line-content")]
    .map((line) => (line.textContent === "\n" ? "" : line.textContent))
    .join("\n");

document.addEventListener("click", (event) => {
  const copy = event.target.closest(".code-block-copy");
  if (copy) {
    const block = root(copy);
    const status = block.querySelector(".code-block-status");
    navigator.clipboard
      ?.writeText(plainCode(block))
      .then(() => {
        copy.dataset.copied = "";
        copy.setAttribute("aria-label", copy.dataset.copiedLabel);
        status.textContent = copy.dataset.copiedLabel;
        setTimeout(() => {
          delete copy.dataset.copied;
          copy.setAttribute("aria-label", copy.dataset.label);
          status.textContent = "";
        }, 2000);
      })
      .catch(() => {});
    return;
  }

  const wrap = event.target.closest(".code-block-wrap");
  if (wrap) {
    const on = root(wrap).classList.toggle("is-wrap");
    wrap.setAttribute("aria-pressed", String(on));
    return;
  }

  const download = event.target.closest(".code-block-download");
  if (download) {
    const url = URL.createObjectURL(
      new Blob([plainCode(root(download))], { type: "text/plain" })
    );
    const link = document.createElement("a");
    link.href = url;
    link.download = download.dataset.filename;
    link.click();
    URL.revokeObjectURL(url);
    return;
  }

  const more = event.target.closest(".code-block-more");
  if (more) {
    const open = root(more).classList.toggle("is-expanded");
    more.setAttribute("aria-expanded", String(open));
    more.querySelector("span").textContent = open
      ? more.dataset.less
      : more.dataset.more;
  }
});

// No "Show more" when the code already fits under the cap.
document
  .querySelectorAll(".wp-block-shadcn-code-block.has-show-more")
  .forEach((block) => {
    const pre = block.querySelector(".code-block-content");
    if (pre.scrollHeight <= pre.clientHeight + 1) {
      block.classList.add("is-fit");
      block.querySelector(".code-block-footer").hidden = true;
    }
  });

// Syntax colors: swap each line's text for token spans (textContent, so safe).
document
  .querySelectorAll(".wp-block-shadcn-code-block code[data-language]")
  .forEach((code) => {
    const contents = code.querySelectorAll(".line-content");
    tokenize(plainCode(root(code)), code.dataset.language).forEach(
      (tokens, index) => {
        if (!contents[index] || tokens.length === 0) {
          return;
        }
        contents[index].replaceChildren(
          ...tokens.map(({ type, text }) => {
            if (!type) {
              return text;
            }
            const span = document.createElement("span");
            span.className = `tok-${type}`;
            span.textContent = text;
            return span;
          })
        );
      }
    );
  });
