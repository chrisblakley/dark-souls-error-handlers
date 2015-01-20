if ( window.addEventListener ) {
	window.addEventListener('error', function(e) {
		if ( e.lineno != 0 ) {
			darkSoulsErrorHandler();
		}
	});
} else {
	window.attachEvent('onerror', function(e) {
		if ( e.lineno != 0 ) {
			darkSoulsErrorHandler();
		}
	});
}

function darkSoulsErrorHandler(){
	//Do something dastardly here.
	alert("You Died");
}
