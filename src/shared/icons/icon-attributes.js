/**
 * Shared icon attribute schema + helpers.
 *
 * Both the Badge block and the core/button extension declare these SAME three
 * attributes so one picker/render path serves every consumer.
 */

/**
 * Attribute definitions to merge into a block's `attributes`.
 *
 * - iconName:     Lucide slug (empty = no icon).
 * - iconPosition: 'left' | 'right' relative to the label (default 'left').
 * - iconSize:     CSS size string (e.g. '16px'); empty = inherit from font-size.
 */
export const ICON_ATTRIBUTES = {
	iconName: { type: 'string', default: '' },
	iconPosition: { type: 'string', default: 'left' },
	iconSize: { type: 'string', default: '' },
};

/**
 * Build the wrapper class list for an icon-bearing element.
 *
 * Mirrors the PHP `Icons::icon_classes()` so editor and frontend agree.
 *
 * @param {string} iconName     Selected slug (empty = no classes).
 * @param {string} iconPosition 'left' | 'right'.
 * @return {string} e.g. 'has-icon has-icon-left' or '' when no icon.
 */
export function buildIconClasses( iconName, iconPosition ) {
	if ( ! iconName ) {
		return '';
	}
	const position = 'right' === iconPosition ? 'right' : 'left';
	return `has-icon has-icon-${ position }`;
}
