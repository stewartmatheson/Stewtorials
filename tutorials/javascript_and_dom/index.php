<?php include "../../header.php"; ?>

<h1>Javascript and the DOM</h1>


<h3>Document Object Model</h3>
<p>Javascript's most common use is interacting with the document object model. The "DOM" is a tree structure that is built from HTML elements on a given web page. Each element is one branch on the tree. Branches on this tree can have other branches. Much is the same way files and folders work. These relationships are called child-parent relationships. A given element can have one parent and can also have many children. The HTML element is the only element in a given page that does not have a parent. It is the top most element and as such is referred to as the root of the tree.</p>

<p>Understanding the DOM is an important part of learning javascript and how to add interactivity to web pages. With out a firm understanding of the DOM you will be unable to write dynamic web pages.</p>

<h3>DOM: Elements</h3>
<p>As discussed the DOM is made up of elements. Javascript performs actions on these DOM elements. This allows us to change the page in any way we need even after a page has been loaded. Couple with this with an events system and we can create fully functional interactive experiences.</p>

<h3>Exercise: Explore the DOM</h3>
<div class="exercise">
    <ol>
        <li>Download and Open Google Chrome</li>
        <li>Rick click on this page and click "inspect element"</li>
        <li>Explore the DOM of this page and try to find the elements controlling this list.</li>
	<p>Make sure to note who is the parent and who is the child of each element or set of elements. When It comes to writing Javascript there will be times that you will be required to traverse the dom.
    <ol>
</div>

<h3>jQuery</h3>
<p>Javascript is can be used to control the DOM however the design is not great. Developers end up sending a lot of time rewriting the same code again and again. There is also cross browser issues to consider. What works in one browser might not work in another with HTML and this is also true of Javascript. There are many frameworks that are available out there that that help javascript developers. One such framework is <a href="http://jquery.com">jQuery</a>.</p>

<p>jQuery makes writing javascript a much more enjoyable experience.  jQuery aims to simplify some of the more common tasks in javascript development while unifying  the experience over the different available browsers. This is very handy as it allows developers to be more productive. jQuery is used widely in industry and is open and free. Some of jQuery's features include</p>

<p>To use jQuery we just have to include the jQuery library file in our source code of our page. Google host jQuery and a number of other handy javascript library for us. This is handy as we don't have to download the library and set it up each time. We can just include a link to google's hosted version. The following example is how to do this.</p>

<?php render_code_block('html', "include_jquery.html", "Including jQuery in a page."); ?>

<h3>jQuery Selectors</h3>
<p>When performing operations on elements within an HTML document we need to first choose what elements we need to perform actions on. This can be done using jQuery selectors. jQuery selectors work much like CSS selectors. Note that jQuery selectors will work on one or many elements depending on the selector. For more detail on using <a href="http://api.jquery.com/category/selectors/" alt="jQuery selectors man page">jQuery selectors</a> check the official jQuery documentation. For the moment here is a run down of the selectors you might use the most often. When using jQuery selectors we must first use the jQuery object. Details of the jQuery object can be found in the next section.</p>

<?php render_code_block('html', "example_selectors.html", "An example HTML page"); ?>
<?php render_code_block('js', "example_selectors.js", "Javascript selectors"); ?>

<p>For the following exercise use the "selector tester". This will give all elements selected a red background. Simply write your selector where it says "insert selector here".</p>

<?php render_code_block('js', "selector_tester.js", "Selector Tester"); ?>

<h3>Exercise: Selectors</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Include jQuery from the Google API in your file</li>
        <li>Create a script Tag in that new file</li>
        <li>Copy the body of the html example "An example HTML page" and make it load in your page. </li>

        <li>Write a jQuery object that has a selector that will select each div element.</li>
        <li>Write a jQuery object that has a selector that will select each element with the class "layout".</li>
        <li>Write a jQuery object that has a selector that will select the element with id "main-content".</li>
        <li>Write a jQuery object that has a selector that will select just the hidden elements and show them.</li>
		<p>For the last exercise you will need to use a different kind of selector that we have not yet discussed. This selector can be used to select anything hidden and can be found in the <a href="http://api.jquery.com/hidden-selector/">jQuery documentation</a>.</p>
		
    <ol>
</div>

<h3>The jQuery Object</h3>
<p>Performing actions on the dom using jQuery is done via the jQuery object. The jQuery object is a javascript object with all of the functions contained with in jQuery. This global can be referenced in two different ways. Either by the work "jQuery" or by the "$" sign. The "$" sign is more common and makes for less code however its up to the writer as to what they want to use as both work.</p>

<?php render_code_block('js', "jquery_object.js", "Using the javascript object"); ?>

<p>When using jQuery there are two main steps. First is working out the correct selector for your needs and the second is performing operations on that selector. Operations in jQuery are all functions that are callable form the jQuery object. When we use the jQuery object and type a selector then any more operations we perform on that object will be applied to all of the elements selected. As we are dealing with a single jQuery object we can also use method chaining to apply multiple operations</p>

<?php render_code_block('js', "jquery_operations.js", "jQuery operations and method chaining"); ?>

<h3>Exercise: Manipulation</h3>
<div class="exercise">
	<ol>
		<li>Create a new HTML file</li>
		<li>Include jQuery from the Google API in your file</li>
		<li>Create a script Tag in that new file</li>
		<li>Copy the body of the html example "An example HTML page" and make it load in your page.</li>
		<li>Write an operation that changes the background colour of the body to blue</li>
		<li>Write an operation that hides all of the "p" elements</li>
		<li>Write an operation that applies a random colour to each div on your page.</li>
		<p>The last question is going to be tricky. Why not put some colour codes in an array and then use CSS to apply a random element from the array. Checkout how to use <a alt="Math.random on w3Schools" href="http://www.w3schools.com/jsref/jsref_random.asp">Math.random on W3Schools</a> for more info about this.</p>
	<ol>
</div>


<p>A final note on manipulation: jQuery is a big framework. Its work taking time out to read though the <a href="http://api.jquery.com">API</a>. Even if you don't read every part of it its still great to have an overview of how the framework functions and what it can offer.</p>

<h3>Events</h3>
<p>Unlike PHP and HTML javascript programming can be state based. The DOM represents a single state and can be changed at any given time. We can also save data in different parts of the DOM. This turns the tables and allows us to build web applications that are more like desktop applications. Events in jQuery normally accept a function as part of their parameters. This function is a closure and will be executed when jQuery is ready to call the event. This provides us with a way of hooking in to events and running code we want. It's a great way to program as we can bind as many functions to an event as we need. Thus allowing us to create a set of functions that all perform actions for a feature of our program. This practice is known as <a href="http://en.wikipedia.org/wiki/Aspect-oriented_programming">aspect orientated programming</a>.</p>


<?php render_code_block('js', "jquery_events.js", "Some basic events in jQuery."); ?>

<h3>Document Ready</h3>
<p>One of the most common tasks performed in jQuery is initialisation. This is an event that happens when the document is loaded in the browser. Any code that sets up other events such as mouse clicks and keyboard events should by run when the document is ready. Fortunately jQuery provides us with a way of binding events to document ready.</p>

<?php render_code_block('js', "document_ready.js", "Binding events with document ready."); ?>

<h3>Manipulation</h3>
<h3>Manipulation: CSS</h3>
<h3>Manipulation: Attributes</h3>
<h3>Manipulation: Prepend, Append, Add, Remove</h3>
<h3>Effects</h3>
<h3>Ajax</h3>


<?php include "../../disqus.php"; ?>
<?php include "../../footer.php"; ?>

