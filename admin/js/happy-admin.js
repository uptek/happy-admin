(function($) {

	var DOMStrings = {};
	var DOMElements = {};

	var triggerables = [];

	$(document).on('keydown', function(event) {
		if (isControlAndEnter(event)) {
			triggerClickOnTriggerables(triggerables);
		}
	});

	DOMStrings = {
		submit: 'input[type="submit"]',
		publish: '.editor-post-publish-button',
		publishToggle: '.editor-post-publish-panel__toggle',
	};

	DOMElements = {
		submit: $(DOMStrings.submit),
		publish: $(DOMStrings.publish),
		publishToggle: $(DOMStrings.publishToggle),
	};

	triggerables = [
		DOMElements.submit,
		DOMElements.publish,
		DOMElements.publishToggle,
	];

	function isControlAndEnter(event) {
		var isEnterKey = event.key.toLowerCase() === 'enter';
		var hasControlKeyPressed = event.ctrlKey || event.metaKey;

		return hasControlKeyPressed && isEnterKey;
	}

	function triggerClickOnTriggerables(triggerables) {
		triggerables.forEach(function(triggerable) {
			triggerable.trigger('click');
		});
	}

})(jQuery);