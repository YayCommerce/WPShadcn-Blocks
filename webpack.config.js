const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const fs = require("fs");
const path = require("path");

/**
 * Plugin to fix @wordpress/interactivity imports after each compilation.
 * In dev mode: uses source files directly with ES6 imports.
 * In prod mode: fixes the minified webpack output.
 */
class FixInteractivityPlugin {
  apply(compiler) {
    compiler.hooks.afterEmit.tap("FixInteractivityPlugin", () => {
      const isProduction = compiler.options.mode === "production";
      this.fixViewFiles(isProduction);
    });
  }

  fixViewFiles(isProduction) {
    const blocks = [
      { name: "alert", imports: ["store", "getContext"] },
      { name: "drawer", imports: ["store", "getContext"] },
      { name: "tooltip", imports: ["store", "getContext"] },
      { name: "sheet", imports: ["store", "getContext"] },
      { name: "accordion", imports: ["store", "getContext"] },
      { name: "sonner", imports: ["store", "getContext"] },
      { name: "tabs", imports: ["store", "getContext"] },
      { name: "pricing", imports: ["store", "getContext"] },
    ];

    blocks.forEach(({ name, imports }) => {
      const buildPath = path.join(__dirname, `build/blocks/${name}/view.js`);
      const srcPath = path.join(__dirname, `src/blocks/${name}/view.js`);

      if (!fs.existsSync(buildPath)) return;

      let content = fs.readFileSync(buildPath, "utf8");

      // Skip if already fixed
      if (content.startsWith("import {")) return;

      const importStatement = `import { ${imports.join(
        ", "
      )} } from '@wordpress/interactivity';\n`;

      if (isProduction) {
        // Production: fix minified webpack output
        content = content.replace(/\(\(\)=>\{import[^;]+;\s*/, "(()=>{");
        content = importStatement + content;
        content = content.replace(
          /const\s+\w+\s*=\s*window\.wp\.interactivity[,;]?\s*/g,
          ["drawer", "tooltip", "popover", "sheet"].includes(name) ? "const " : ""
        );
        content = content.replace(/\(0,(\w+)\.store\)/g, "store");
        content = content.replace(/\(0,(\w+)\.getContext\)/g, "getContext");
        content = content.replace(
          /\(0,(\w+)\.withSyncEvent\)/g,
          "withSyncEvent"
        );
      } else {
        // Development: use source file with ES6 import transformation
        if (!fs.existsSync(srcPath)) return;

        let srcContent = fs.readFileSync(srcPath, "utf8");

        // Remove existing import and destructure pattern
        srcContent = srcContent.replace(
          /import\s*\{[^}]+\}\s*from\s*['"]@wordpress\/interactivity['"];?\s*/g,
          ""
        );

        // Add clean import at top and wrap in IIFE
        content =
          importStatement +
          '(()=>{\n"use strict";\n' +
          srcContent.trim() +
          "\n})();";
      }

      fs.writeFileSync(buildPath, content, "utf8");
    });
  }
}

/**
 * Resolve wp-scripts' auto-detected entries (block.json scripts + src/index),
 * then add our standalone entries. wp-scripts exposes `entry` as a function;
 * call it and merge.
 *
 * `blocks/tabs/view` is listed explicitly because tabs deliberately omits the
 * `viewScript` field: that field makes WordPress enqueue the file as a classic
 * script, which cannot execute the ES module import FixInteractivityPlugin
 * rewrites it to. Plugin.php enqueues it as a script module instead.
 */
function buildEntry() {
  const base =
    typeof defaultConfig.entry === "function"
      ? defaultConfig.entry()
      : defaultConfig.entry;

  return {
    ...base,
    "extensions/core-button-icon": path.resolve(
      __dirname,
      "src/extensions/core-button-icon/index.js"
    ),
    "blocks/tabs/view": path.resolve(__dirname, "src/blocks/tabs/view.js"),
    "blocks/pricing/view": path.resolve(
      __dirname,
      "src/blocks/pricing/view.js"
    ),
  };
}

module.exports = {
  ...defaultConfig,
  entry: buildEntry,
  plugins: [...(defaultConfig.plugins || []), new FixInteractivityPlugin()],
};
