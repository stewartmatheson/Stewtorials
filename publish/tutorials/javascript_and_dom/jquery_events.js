//This event will run when ever the user clicks on a <p> tag. Quite annoying really.
$('p').click(function(){
	alert('You have clicked on a paragraph tag');
});

//This event will dispay a div when the user clicks on a link. Note here we are using a hash in the selector. This is how we select id's
$('#dispaly-hidden-div-link').click(function(){
	//In this function we are finding another div and then displaying it to the user. Think of a drop down. Once the user clicks the link the drop down displays.
	$('#hidden-div').slideDown('fast');
});
