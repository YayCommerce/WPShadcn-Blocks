/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";

/**
 * Bubble variant options, shared by the Bubble and Message blocks. Values map
 * to the `bubble-{variant}` classes in blocks/bubble/style.scss.
 */
export const VARIANT_OPTIONS = [
  { label: __("Default", "yaycommerce-blocks-for-shadcn-ui"), value: "default" },
  { label: __("Secondary", "yaycommerce-blocks-for-shadcn-ui"), value: "secondary" },
  { label: __("Muted", "yaycommerce-blocks-for-shadcn-ui"), value: "muted" },
  { label: __("Tinted", "yaycommerce-blocks-for-shadcn-ui"), value: "tinted" },
  { label: __("Outline", "yaycommerce-blocks-for-shadcn-ui"), value: "outline" },
  { label: __("Ghost", "yaycommerce-blocks-for-shadcn-ui"), value: "ghost" },
  { label: __("Destructive", "yaycommerce-blocks-for-shadcn-ui"), value: "destructive" },
];

