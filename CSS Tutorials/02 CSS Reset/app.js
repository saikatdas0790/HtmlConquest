( function() {
	"use strict";

	// Execute the APP when DOM is ready
	document.addEventListener( 'DOMContentLoaded', function() {
		// Add some functionality to the reset button
		var resetButton = document.getElementById( 'css-reseter' ),
		resetCSS = document.getElementById( 'reset-css' );
		resetButton.onclick = function() {
			// Get the attribute
			var currentlyDisabled = resetCSS.getAttribute( 'disabled' );

			// If it is already enabled
			if ( null === currentlyDisabled ) {
				// Change the text
				resetButton.innerHTML = 'Enable CSS Reset';

				// Add the disabled attribute
				resetCSS.setAttribute( 'disabled', 'disabled' );
			} else {
				// Change the text
				resetButton.innerHTML = 'Disable CSS Reset';

				// Remove the disabled attribute
				resetCSS.removeAttribute( 'disabled' );
			}
		};
	});

} )();
