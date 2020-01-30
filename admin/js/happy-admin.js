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