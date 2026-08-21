=== Shadcn Blocks ===
Contributors: yaycommerce
Tags: gutenberg, blocks, shadcn
Requires at least: 6.5
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Gutenberg blocks and 473 section patterns for the Shadcn theme, with a Lucide icon picker and AI prompt-to-layout page building.

== Description ==

Shadcn Blocks is a companion plugin for the [Shadcn theme](https://wpshadcn.com/). It adds interactive Gutenberg blocks built on Shadcn UI design principles, a library of ready-made section patterns, and an AI page builder that assembles those patterns from a prompt.

**Note:** This plugin requires the Shadcn theme, or a child of it, to be active.

= Content and layout blocks =

* **Card** - A card container, with Card Header, Card Content and Card Footer child blocks.
* **Accordion** - Vertically stacked collapsible sections, one open at a time or several at once. Collapsible (all closed), selectable trigger heading level (H2-H6), outlined variant, optional auto-rotation with per-item progress, and a per-item disabled state.
* **Tabs** - Layered sections of content that show one panel at a time, built from Tab child blocks.
* **Badge** - A small inline label or status pill with variants, an optional link and an optional icon.
* **Avatar** and **Avatar Group** - A circular avatar with fallback initials, and an overlapping stack with an automatic "+N" overflow indicator.
* **Bubble** and **Bubble Group** - Conversational message bubbles for chat mockups: 7 variants, with start/end alignment inherited from the group.
* **Marker** - A small labeled meta-row: a muted text line, a centered separator, or a bordered label.
* **Empty** - An empty state placeholder with centered content.

= Overlay and notification blocks =

* **Alert** - A callout for user attention, with Alert Title and Alert Description child blocks and an optional dismiss button.
* **Sonner (Toast)** - A button that fires a toast on click: default, success, error, warning and info types with rich colors and icons, stacking on a single shared toaster.
* **Drawer** - A slide-out panel, with Drawer Trigger, Header, Content and Footer child blocks.
* **Sheet** - A modal side panel, with Sheet Trigger, Header, Content and Footer child blocks.
* **Tooltip** - A hover hint, with Tooltip Trigger and Tooltip Content child blocks.

= Motion and data blocks =

* **Carousel** - A slider that wraps any content, including posts and products. Horizontal or vertical, with a configurable number of slides per view.
* **Marquee** - A continuously scrolling, seamless strip for logos, testimonials or any content, built from Marquee Item children.
* **Progress** - A progress bar for loading and completion indicators.
* **Counter** - A number that counts up to its target value when it scrolls into view.
* **Countdown** - A timer counting down to a date and time, for promo banners and launch pages.

= Pricing blocks =

* **Pricing** - Holds the billing interval for everything inside it. Plans are laid out with ordinary blocks.
* **Pricing Switch** - Chooses the billing interval for every price in the surrounding Pricing block.
* **Pricing Price** - A price figure that follows the current billing interval.

= Form blocks =

* **Form** - Emails its fields to the site admin, or a chosen recipient, on submit.
* **Input** - A labeled text, email or phone field.
* **Textarea** - A labeled multi-line message field.
* **Select** - A labeled dropdown of predefined options.
* **Form Submit Button** - A real submit button, with a pending spinner while sending.

Submissions travel over a public REST endpoint guarded by a honeypot and per-IP rate limiting, and nothing is stored in the database. Delivery uses wp_mail(), so a mail or SMTP plugin is recommended for reliable sending. Developers can veto a submission, to add a captcha for example, with the `shadcn_form_validate` filter.

= Filtering =

* **Filterable Sections** - Labelled Filter Section children with a dropdown that narrows the page down to one of them.

= Patterns =

473 section patterns ship with the plugin, filed under their own categories in the inserter: about, awards, banner, call to action, careers, case studies, changelog, community, compare, compliance, contact, download, FAQ, footer, hero, incentives, industries, portfolio, posts, pricing, process, services, stats, team, testimonials, text and timeline.

Patterns are registered lazily, so they cost nothing until the inserter or the AI catalog actually reads one, and every placeholder image ships with the plugin, so a pattern makes no outbound requests to render.

= Shadcn AI =

Describe the page you want and Shadcn AI builds it out of the patterns above. Generation opens in a modal with live progress: each planned section is named as the AI writes it, streamed over Server-Sent Events, and the result arrives as a full block preview with Insert, Copy blocks and Start over. Generation can be cancelled at any point.

The site registers itself with the AI service on first use, so there is no endpoint and no key to configure. A manually issued token is only needed for sites unreachable from the outside (Settings -> Shadcn AI). When the Shadcn AI Proxy plugin is active on the same install, generation runs in-process with that install's own OpenAI key.

= Editor extensions =

* **Icon picker** - A searchable Lucide icon picker (curated set) on the Badge block and on the core Button block, with left/right position and size controls. Icons render as inline SVG and inherit the current text color.
* **Block styles** - Sticky column, Divided rows, On dark and Hover reveal panel for core Group; Check list and Plain list for core List; Vertical rail for Carousel.

= Integrations =

* **WooCommerce** - A free shipping progress indicator powered by the Progress block.

= Features =

* Built with the WordPress Interactivity API for smooth, JavaScript-powered interactions
* Fully responsive and mobile-friendly
* Inherits Shadcn theme styling and design tokens
* Supports the editor's color, spacing, typography and border controls
* Block editor integration with live preview
* Custom block category for easy discovery
* Translation-ready (text domain: shadcn-blocks)
* Lightweight and performance optimized

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

= Where do I find the section patterns? =

In the block editor, open the inserter and switch to the Patterns tab. The plugin's patterns are filed under their own section categories - Hero, Pricing, Testimonials, FAQ, Footer and so on - so you can browse by the kind of section you need rather than scrolling one long list.

= Do I need an API key or an account to use Shadcn AI? =

No. The site registers itself with the AI service the first time someone uses Shadcn AI, so there is nothing to configure. Settings -> Shadcn AI only asks for a manually issued token in one case: a site the service cannot reach from the outside, such as a local or firewalled install. If the Shadcn AI Proxy plugin is active on the same install, generation runs in-process with that install's own OpenAI key instead.

= How do I use Shadcn AI, and are there limits? =

Open a page or post, then choose Shadcn AI from the editor sidebar. Describe the page you want and the plugin builds it out of its own patterns, naming each section as it is written and finishing with a full block preview you can insert, copy or discard. Generation is limited to 20 layouts per day for the whole site, and is available to users who can manage themes (administrators by default).

= Where do form submissions go? Are they stored? =

They are emailed and nothing is stored. Each submission is sent to the site admin address, or to the recipient set on that specific Form block, and no database table or post type keeps a copy - so export a submission from your inbox if you need it. The first email address in the submission becomes the Reply-To, so answering the notification replies to the visitor. Mail is sent with wp_mail(), so a mail or SMTP plugin is recommended for reliable delivery, and the recipient address is signed by the site, so a visitor cannot redirect a form to somewhere else.

= How are forms protected from spam? =

Two layers ship by default: a honeypot field that bots fill in and humans never see, and a per-IP rate limit of 5 submissions every 10 minutes. Anything stricter is up to you - the `shadcn_form_validate` filter lets a developer reject a submission for any reason, which is where a captcha or an external spam service would be wired in.

== Screenshots ==

1. Card block with header, content, and footer
2. Accordion block with collapsible items
3. Alert block with dismissible functionality
4. Drawer block slide-out panel
5. Block category in the editor

== Changelog ==

= 1.0.0 =
First public release. Requires the Shadcn theme (or a child of it) to be active.

**Blocks**

* Card — container with Card Header, Card Content and Card Footer child blocks.
* Accordion — vertically stacked collapsible sections; single-open or multi-open, collapsible (all closed), selectable trigger heading level (H2–H6), outlined variant, optional auto-rotation with per-item progress, per-item disabled state.
* Tabs — layered sections of content that show one panel at a time, built from Tab child blocks.
* Alert — callout with Alert Title and Alert Description child blocks, optionally dismissible.
* Sonner (Toast) — a button that fires a toast on click: default, success, error, warning and info types with rich colors and icons, stacking on a single shared toaster.
* Drawer — slide-out panel with Drawer Trigger, Header, Content and Footer.
* Sheet — modal side panel with Sheet Trigger, Header, Content and Footer.
* Tooltip — hover hint with Tooltip Trigger and Tooltip Content.
* Carousel — wraps any content, including posts and products; horizontal or vertical, with a configurable number of slides per view.
* Marquee — continuously scrolling, seamless strip for logos, testimonials or any content, built from Marquee Item children.
* Badge — small inline label or status pill with variants, an optional link and an optional icon.
* Avatar and Avatar Group — circular avatar with fallback initials, and an overlapping stack with an automatic "+N" overflow indicator.
* Bubble and Bubble Group — conversational message bubbles for chat mockups: 7 variants, start/end alignment inherited from the group.
* Marker — small labeled meta-row: a muted text line, a centered separator, or a bordered label.
* Progress — progress bar for loading and completion indicators.
* Counter — a number that counts up to its target value when it scrolls into view.
* Countdown — a timer counting down to a date and time, for promo banners and launch pages.
* Empty — empty-state placeholder with centered content.
* Pricing, Pricing Switch and Pricing Price — the Pricing block holds the billing interval, the Switch changes it, and every Price inside follows it. Plans are laid out with ordinary blocks.
* Filterable Sections — labelled Filter Section children with a dropdown that narrows the page down to one of them.
* Form, Input, Textarea, Select and Form Submit Button — submissions are emailed to the site admin (or a per-form recipient) through a public REST endpoint guarded by a honeypot and per-IP rate limiting; nothing is stored. Delivery uses wp_mail(), so a mail/SMTP plugin is recommended. Developers can veto a submission (to add a captcha, for example) with the `shadcn_form_validate` filter.

**Patterns**

* 473 section patterns, filed under their own categories in the inserter: about, awards, banner, call to action, careers, case studies, changelog, community, compare, compliance, contact, download, FAQ, footer, hero, incentives, industries, portfolio, posts, pricing, process, services, stats, team, testimonials, text and timeline.
* Patterns are registered lazily from the plugin's pattern files, so they cost nothing until the inserter or the AI catalog actually reads one.
* Every placeholder image ships with the plugin — patterns make no outbound requests to render.

**Editor extensions**

* Icon picker: a searchable Lucide icon picker (curated set) on the Badge block and on the core Button block, with left/right position and size controls. Icons render as inline SVG and inherit the current text color.
* Block style variations: Sticky column, Divided rows, On dark and Hover reveal panel for core Group; Check list and Plain list for core List; Vertical rail for Carousel.

**Shadcn AI**

* Prompt-to-layout: describe a page and get it built from this plugin's patterns. Generation opens in a modal with live progress — each planned section is named as the AI writes it, streamed over Server-Sent Events — then a full block preview with Insert, Copy blocks and Start over. Generation can be cancelled at any point.
* The site registers itself with the AI service on first use: no endpoint and no key to configure. A manually issued token is only needed for sites unreachable from the outside (Settings → Shadcn AI).
* When the Shadcn AI Proxy plugin is active on the same install, generation runs in-process with that install's own OpenAI key — no token, no self-registration, no HTTP round-trip.

**Integrations**

* WooCommerce: free shipping progress powered by the Progress block.

**Under the hood**

* Interactive blocks are built on the WordPress Interactivity API.
* Blocks inherit the Shadcn theme's design tokens and support the editor's colour, spacing, typography and border controls.
* All blocks are grouped under a Shadcn category in the inserter.
* Translation-ready (text domain: shadcn-blocks).

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
