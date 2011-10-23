//this code will not work as its out side an event such as document ready
$('selector').doSomething();

$(document).ready(function(){
	console.log('The page is ready to bind events.');
	
	// now other operations can be done here.
	$('selector').doSomething();
});

//NOTE: How we pass the document.ready a function. This is a closure. We are simply declaring our function within another functions call. This is how all events are handled within jQuery.