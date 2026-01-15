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
      { name: "accordion", imports: ["store", "getContext", "withSyncEvent"] },
      { name: "alert", imports: ["store", "getContext"] },
      { name: "drawer", imports: ["store", "getContext"] },
    ];

    blocks.forEach(({ name, imports }) => {
      const buildPath = path.join(__dirname, `build/blocks/${name}/view.js`);
      const srcPath = path.join(__dirname, `src/blocks/${name}/view.js`);

      if (!fs.existsSync(buildPath)) return;

      let content = fs.readFileSync(buildPath, "utf8");

      // Skip if already fixed
      if (content.startsWith("import {")) return;

      const importStatement = `import { ${imports.join(", ")} } from '@wordpress/interactivity';\n`;

      if (isProduction) {
        // Production: fix minified webpack output
        content = content.replace(/\(\(\)=>\{import[^;]+;\s*/, "(()=>{");
        content = importStatement + content;
        content = content.replace(
          /const\s+\w+\s*=\s*window\.wp\.interactivity[,;]?\s*/g,
          name === "drawer" ? "const " : ""
        );
        content = content.replace(/\(0,(\w+)\.store\)/g, "store");
        content = content.replace(/\(0,(\w+)\.getContext\)/g, "getContext");
        content = content.replace(/\(0,(\w+)\.withSyncEvent\)/g, "withSyncEvent");
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
        content = importStatement + "(()=>{\n\"use strict\";\n" + srcContent.trim() + "\n})();";
      }

      fs.writeFileSync(buildPath, content, "utf8");
    });
  }
}

module.exports = {
  ...defaultConfig,
  plugins: [...(defaultConfig.plugins || []), new FixInteractivityPlugin()],
};
