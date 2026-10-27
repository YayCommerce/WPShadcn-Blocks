/**
 * WordPress dependencies
 */
import { registerBlockCollection } from "@wordpress/blocks";

/**
 * Register block collection.
 */
registerBlockCollection("shadcn", {
  title: "Shadcn",
});

/**
 * Import all blocks.
 */
import "./blocks/card";
import "./blocks/card-header";
import "./blocks/card-content";
import "./blocks/card-footer";

import "./blocks/alert";
import "./blocks/alert-title";
import "./blocks/alert-description";

import "./blocks/progress";

import "./blocks/drawer";
import "./blocks/drawer-trigger";
import "./blocks/drawer-header";
import "./blocks/drawer-content";
import "./blocks/drawer-footer";

import "./blocks/tooltip";
import "./blocks/tooltip-trigger";
import "./blocks/tooltip-content";

import "./blocks/sheet";
import "./blocks/sheet-trigger";
import "./blocks/sheet-header";
import "./blocks/sheet-content";
import "./blocks/sheet-footer";

import "./blocks/avatar";
import "./blocks/avatar-group";

import "./blocks/code-block";
