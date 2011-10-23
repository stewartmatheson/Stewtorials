$('p') //This selector selects all paragrah tags in the document

$('div') //This selector selects all div tags

$('p:first') //This selector selects the first paragrah tag

$('.class_name') //Any selector with a dot selects all elements with the class name "class_name". This is the same in CSS.

$('#id_name') //This selector selects the element with the id "id_name". Remember only one element on the page should have an ID.

$('input[type=text]') //This selector selects all inputs that are of type text. Great if you need to perform operations on forms

$('tr:even') //This selector will select all the even table rows. Great if you want to a zebra style list for a table as css does not support this.

$('*') //Star is a wild card that will select all elements on a page

$('*:not(input)') //Not can be used to select everything but the input tags. This can be used with any kind of selector not just *