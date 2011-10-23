//This will slide up p elements
$('p').slideUp('fast');

//This will show all hidden divs on the page and then place a black border around them.
$('div').show().css('border','1px solid #000');

//Here we can set the content of an element.
$('#greeting').html('Hello how are you today?');

//Here we can get the content of an element.
$('#greeting').html(); //Returns whats inside the element