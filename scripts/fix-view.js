#!/usr/bin/env node
const fs = require("fs");
const path = require("path");

const viewJsPath = path.join(__dirname, "../build/blocks/accordion/view.js");

if (fs.existsSync(viewJsPath)) {
  let content = fs.readFileSync(viewJsPath, "utf8");

  // Only fix if it's using window.wp.interactivity or has import inside IIFE
  if (
    content.includes("window.wp.interactivity") ||
    (content.includes("import {") && content.includes("(()=>{import"))
  ) {
    // Add import statement at the very beginning of the file (outside IIFE)
    const importStatement =
      "import { store, getContext, withSyncEvent } from '@wordpress/interactivity';\n";

    // Check if import is already at the top level
    if (!content.startsWith("import {")) {
      // Remove import from inside IIFE if present
      content = content.replace(/\(\(\)=>\{import[^;]+;\s*/, "(()=>{");

      // Add import at the beginning
      content = importStatement + content;
    }

    // Remove the const e = window.wp.interactivity line
    content = content.replace(
      /const\s+\w+\s*=\s*window\.wp\.interactivity;?\s*/,
      ""
    );

    // Replace e.store, e.getContext, e.withSyncEvent with direct function calls
    // The variable name might be different, so we'll use a regex that matches any single letter
    content = content.replace(/\(0,(\w+)\.store\)/g, "store");
    content = content.replace(/\(0,(\w+)\.getContext\)/g, "getContext");
    content = content.replace(/\(0,(\w+)\.withSyncEvent\)/g, "withSyncEvent");

    fs.writeFileSync(viewJsPath, content, "utf8");
  }
}
