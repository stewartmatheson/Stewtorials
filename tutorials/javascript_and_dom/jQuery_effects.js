//Fade in will make a hidden element appear to fade in to the page.The parameater is the speed of the fade, in this case its set to fast.
$('div').fadeIn('fast');

//Fade out will slowly dissolve an element so that it can no longer be seen. The parameater is the speed of the fade. Note that the element will be given "display:none;" 
$('div').fadeOut('slow');

//Slide toggle is smart enough to know if the element is hidden or shown and then will chagne the visibilty accordingly.
$('div').slideToggle();
