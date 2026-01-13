/**
 * WordPress dependencies
 */
import { registerBlockCollection } from "@wordpress/blocks";

/**
 * Register block collection.
 */
registerBlockCollection("wpshadcn", {
  title: "Shadcn",
});

/**
 * Import all blocks.
 */
import "./blocks/card";
import "./blocks/card-header";
import "./blocks/card-content";
import "./blocks/card-footer";
import "./blocks/accordion";
import "./blocks/accordion-item";
import "./blocks/accordion-trigger";
import "./blocks/accordion-content";
import "./blocks/drawer";
import "./blocks/drawer-trigger";
import "./blocks/drawer-header";
import "./blocks/drawer-content";
import "./blocks/drawer-footer";
