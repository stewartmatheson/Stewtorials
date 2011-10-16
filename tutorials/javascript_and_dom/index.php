<?php include "../../header.php"; ?>

<h1>Javascript and the DOM</h1>


<h3>Document Object Model</h3>
<p>Javascript's most common use is interacting with the document object model. The "DOM" is a tree structure that is built from HTML elemetns on a given web page. Each element is one branch on the tree. Branches on this tree can have other branches. Much is the same way files and folders work. These relationships are called child-parent relationships. A given element can have one parent and can also have many children. The HTML element is the only element in a given page that does not havea parent. It is the top most element and as such is reffered to as the root of the tree.</p>

<p>Understanding the DOM is an importent part of learning javascript and how to add iteractivity to web pages. With out a firm understanding of the DOM you will be unable to write dynamic web pages.</p>

<h3>DOM: Elements</h3>
<p>As discussed the DOM is made up of elemetns. Javascript perfroms actions on these dom elements. This allows us to change the page in any way we need even after a page has been loaded. Couple with this with an events system and we can create fully functional interactive experances.</p>

<h3>Exercise: Explore the DOM</h3>
<div class="exercise">
    <ol>
        <li>Download and Open Google Chrome</li>
        <li>Rick click on this page and click "inspect element"</li>
        <li>Explore the DOM of this page and try to find the elements controlling this list.</li>
	<p>Make sure to note who is the parent and who is the child of each element or set of elemts. When It comes to writing Javascript there will be times that you will be required to preverse the dom.
    <ol>
</div>

<h3>jQuery</h3>
<p>Javascript is can be used to control the DOM however the design is not great. Developers end up sending a lot of time rewriting the same code again and again. There is also cross brower issues to consider. What works in one browser might not work in another with HTML and this is also true of Javascript. There are many frameworks that are avaiable out there that that help javascript developers. One such framework is <a href="http://jquery.com">jQuery</a>.</p>

<p>jQuery makes writing javascript a much more enjoyable experance.  jQuery aims to simpifly some of the more common tasks in javascript development while unifitying the experance over the different avaiable browsers. This is very handy as it allows developers to be more productive. jQuery is used widely in industry and is open and free. Some of jQuery's features include</p>

<p>To use jQuery we just have to include the jQuery library file in our source code of our page. Google host jQuery and a number of other handy javascript librarys for us. This is handy as we dont have to download the library and set it up each time. We can just include a link to google's hosted version. The following example is how to do this.</p>

<?php render_code_block('html', "include_jquery.html", "Including jQuery in a page."); ?>

<h3>jQuery Object</h3>
<p>Perfroming </p>



<h3>Document Ready</h3>

<h3>jQuery Selectors</h3>
<?php render_code_block('html', "example_selectors.html", "An example HTML page"); ?>
<?php render_code_block('js', "example_selectors.js", "Javascript selectors"); ?>

<h3>Events</h3>
<h3>Manipulation</h3>
<h3>Manipulation: CSS</h3>
<h3>Manipulation: Attributes</h3>
<h3>Manipulation: Prepend, Add, Remove</h3>
<h3>Effects</h3>
<h3>Ajax</h3>


<?php include "../../disqus.php"; ?>
<?php include "../../footer.php"; ?>

