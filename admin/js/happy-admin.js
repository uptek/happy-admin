(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );
jQuery(document).keydown(function (event) {
	// If Control or Command key is pressed and the S key is pressed
	// run save function. 83 is the key code for S.
	if ((event.ctrlKey || event.metaKey) && event.which == 83) {
		// Save Function
		jQuery('input[type="submit"]').trigger('click');
		jQuery('.editor-post-publish-panel__toggle').trigger('click');
		jQuery('.editor-post-publish-button').trigger('click');
		
		return false;
	}
}
);