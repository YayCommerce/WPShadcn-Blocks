=== Shadcn Blocks ===
Contributors: yaycommerce
Tags: gutenberg, blocks, shadcn
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Gutenberg blocks for the Shadcn theme. Provides Card, Accordion, Tabs, Alert, Badge, Bubble, Marker, Drawer, Sheet, Tooltip, Carousel, and Progress components.

== Description ==

Shadcn Blocks is a companion plugin for the [Shadcn theme](https://wpshadcn.com/) that adds powerful, interactive Gutenberg blocks built with Shadcn UI design principles.

**Note:** This plugin requires the Shadcn theme to be active.

= Available Blocks =

* **Card** - A versatile card container with header, content, and footer sections
* **Accordion** - Vertically stacked collapsible sections; one item open at a time, collapsible, accessible
* **Sonner (Toast)** - A button that fires a toast notification on click, with type variants and rich colors
* **Alert** - Dismissible notification messages with title and description
* **Badge** - Small inline label or status pill with 6 variants and an optional link
* **Bubble** - Conversational message bubbles with variants and start/end alignment for chat mockups
* **Marker** - Small labeled meta-row: muted text line, centered separator, or bordered label
* **Drawer** - Slide-out panel from the bottom of the screen
* **Sheet** - Side panel overlay for additional content
* **Tooltip** - Hover-activated content hints
* **Carousel** - Image and content slider
* **Progress** - Visual progress indicator bar
* **Empty** - Placeholder state for empty content areas

= Features =

* Built with WordPress Interactivity API for smooth, JavaScript-powered interactions
* Fully responsive and mobile-friendly
* Inherits Shadcn theme styling and design tokens
* Block editor integration with live preview
* Custom block category for easy discovery
* Lightweight and performance optimized

= Block Components =

**Card Block**
- Card Header
- Card Content
- Card Footer

**Accordion Block**
- Accordion Item (trigger + panel content)
- Single-open (exclusive) by default, or allow multiple open at once
- Collapsible, all closed on load
- Selectable heading level (H2–H6) for item triggers
- Outlined (bordered container) variant
- Per-item disabled state

**Sonner (Toast) Block**
- Trigger button fires a toast on click (bottom-right, auto-dismiss)
- Type variants with rich colors + icons: default, success, error, warning, info
- Configurable button label, toast title, and description
- Stacks multiple toasts; single shared toaster

**Alert Block**
- Alert Title
- Alert Description
- Dismissible option

**Drawer Block**
- Drawer Trigger
- Drawer Header
- Drawer Content
- Drawer Footer

**Sheet Block**
- Sheet Trigger
- Sheet Header
- Sheet Content
- Sheet Footer

**Tooltip Block**
- Tooltip Trigger
- Tooltip Content

**Bubble Block**
- Bubble Group (vertical stack with shared default alignment)
- 7 variants (default, secondary, muted, tinted, outline, ghost, destructive)
- Start/end alignment with group inheritance

== Installation ==

1. Ensure the Shadcn theme is installed and activated
2. Upload the `shadcn-blocks` folder to `/wp-content/plugins/`
3. Activate the plugin through the 'Plugins' menu in WordPress
4. Start using Shadcn blocks in the Block Editor

== Frequently Asked Questions ==

= Does this plugin work without the Shadcn theme? =

No, this plugin is designed specifically as a companion to the Shadcn theme. It requires the Shadcn theme to be active to function properly.

= How do I find the blocks in the editor? =

All Shadcn blocks are grouped under the "Shadcn" category in the Block Editor. You can also search for them by name (Card, Alert, Badge, etc.).

= Are the blocks responsive? =

Yes, all blocks are fully responsive and work seamlessly on mobile, tablet, and desktop devices.

= Can I customize the block styles? =

Yes, blocks inherit styling from the Shadcn theme and support WordPress block editor features like color, spacing, and border customization.

= Do the interactive blocks work without JavaScript? =

The static content will always display, but interactive features (drawer open/close, tooltip, etc.) require JavaScript to function.

== Screenshots ==

1. Card block with header, content, and footer
2. Accordion block with collapsible items
3. Alert block with dismissible functionality
4. Drawer block slide-out panel
5. Block category in the editor

== Changelog ==

= 1.0.0 =
* Initial release
* Card block with header, content, and footer components
* Accordion block: single-open (exclusive), collapsible, accessible, selectable heading level
* Sonner (Toast) block: click-to-fire toasts with type variants and rich colors
* Alert block with dismissible option
* Drawer block with trigger, header, content, and footer
* Sheet block for side panel overlays
* Tooltip block for hover hints
* Carousel block for content sliders
* Progress block for visual indicators
* Empty block for placeholder states
* WordPress Interactivity API integration
* WooCommerce free shipping progress integration
* Icon picker: add a searchable Lucide icon picker (curated set) to the Badge block and the core Button block, with left/right position and size controls. Icons render as inline SVG and inherit the current text color.
* Shadcn AI: prompt-to-layout now opens in a modal with live progress — each planned section is named as the AI writes it, streamed over Server-Sent Events — then a full block preview with Insert, Copy blocks, and Start over. Generation can be cancelled at any point.
* Shadcn AI: the site now registers itself with the AI service on first use (no endpoint or key to configure); a manually issued token is only needed for sites unreachable from the outside (Settings → Shadcn AI).
* Shadcn AI: when the Shadcn AI Proxy plugin is active on the same site, generation runs in-process with that install's own OpenAI key — no token, no self-registration, no HTTP round-trip.

== Upgrade Notice ==

= 1.0.0 =
Initial release of Shadcn Blocks plugin.

== Support ==

For support, questions, or to report bugs, please visit [wpshadcn.com](https://wpshadcn.com/) or contact the plugin author.

== Credits ==

* Built with Shadcn UI design principles
* Uses WordPress Interactivity API
* Developed by YayCommerce

== License ==

This plugin is licensed under the GNU General Public License v3 or later.
