<?php include '../../header.php'; ?>

<h1>Introduction to Javascript</h1>
<p>Javascript is a prototypical scripting language. Javascript code is mostly downloaded via a web page and executed on the client machine. Most modern web browsers include an implementation of JavaScript. This is also true for mobile devices including the iPhone. This means that when you write source code all clients download that code. This is opposed to PHP which gets executed on the server with the result being downloaded to the client machine.</p>

<p>As a programming language JavaScript implements "C" style syntax and is based on <a href="http://en.wikipedia.org/wiki/Lisp_%28programming_language%29">Lisp</a>.  When considering programming languages for client side scripting JavaScript is generally the only choice.  Javascript enjoys a diverse audience of users, more so than other programming languages. This coupled with the fact that JavaScript behaves like <a href="http://en.wikipedia.org/wiki/Lisp_%28programming_language%29">Lisp</a> with the syntax of C leads to JavaScript being one of the worlds most misunderstood programming languages.</p>

<h3 class="add_to_toc">Exercise: Download and Install Chrome</h3>
<div class="exercise">
    <ol>
        <li>Download Google Chrome web browser</li>
        <li>Right click on any web page and click "Inspect element". A window should open up across the bottom of the browser.</li>
        <li>In the newly opened window click the "Console" button. Note: this should work on any page including your own.</li>
        <li>Click your cursor next to the blue grater than sign.</li>
        <li>Type "alert("Hello World!");" and press enter</li> 
        <p>Once you hit enter an alert box should pop-up. This is because we are running JavaScript in real time. Any JavaScript command can be typed in to this box and executed in this way. Its very handy for debugging and a great way to learn about JavaScript.<p/>
    </ol>
</div>

<h3 class="add_to_toc">History of Javascript</h3>
<p>Javascript was developed during the mid 90’s for Netscape. Originally called Mocha and then LiveScript the language was developed to allow web developers to script on the web.  Around the time of JavaScript’s  development Java applets where popular and the preferred way of adding interactivity to web pages. Javascript was seen as Java’s poor cousin and treated as such by developers at the time. As applets declined in popularity JavaScript became more prominent. Technologies such as Ajax was developed allowing pages to make asynchronous requests to servers creating even more possibilities for the language.</p>

<p>JavaScript underwent a renaissance. Ajax had popularised JavaScript to a much wider programming community and forced many developers to take the language seriously.  Javascript forms a fundamental part of the Internet and there are many libraries and frameworks available. Javascript also has implementations that run on servers such as Rhino and "node.js" which is based on the Google V8 JavaScript engine.</p>

<h3 class="add_to_toc">Use</h3>
<p>Javascript has many different uses as a programming language. It’s primary use is scripting for web pages. Javascript can be used to change a web page by...</p>
<ul>
    <li>Adding HTML elements</li>
    <li>Removing HTML elements</li>
    <li>Changing the attributes of HTML elements</li>
    <li>Changing the CSS of HTML elements</li>
    <li>Moving HTML elements</li>
    <li>Fetching dynamic data from the server</li>
</ul>

<h3 class="add_to_toc">Writing</h3>
<p>There are two ways to include JavaScript code in a web page. The first is to use the script tag. This tag appears within the head tag and allows JavaScript to be executed on a page. The second way to write JavaScript is to place your code in an external file. Generally these files have the extension .js. This file is then linked to the page you wish to run the JavaScript on. The advantage in doing this is that it allows you to keep your JavaScript code separate from your HTML code. These days big JavaScript projects have many different JavaScript files that are linked to when they are needed by the application.</p>


<?php render_code_block('html','1.html', 'Writing JavaScript inline.'); ?>
<?php render_code_block('html','2.html', 'Including a JavaScript source file in a html document.'); ?>

<h3 class="add_to_toc">Exercise: Hello World</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
        <li>Create an alert box using the code: "alert('Hello World!');"</li>
		<p>Note that you should not include the quotes in your code. It's also worth noting that you don't have to place your file in a server anywhere. The code is run though the browser.</p>
    <ol>
</div>

<p>Some browsers include a JavaScript console with the browser. This allows developers to write JavaScript on their page line by line. Consoles like this are a powerful tool when trying to debug scripts. When starting out with JavaScript take sometime to explore the tools that are available. Many of these tools are free to use and some even come built in to the browser. </p>

<p>One such browser that offers a JavaScript console is Google Chrome. Google Chrome offers a toolkit allowing JavaScript developers to write small sections of JavaScript code and have them instantly run on the loaded page. Chrome also allows users to place break points on our scripts and view what variables when these breakpoints are hit. Much the same way as Microsoft's Visual Studio handles break points.  Google Chrome also has the fastest JavaScript engine. This means that Javascript applications perform the best in Google Chrome. The down side of this is that you may get different(slower) results in <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home">other browsers</a>. It's important that your JavaScript runs the same under all major browsers to ensure that your user experience can appeal to the widest market possible.</p>

<h3 class="add_to_toc">Console Logging</h3>
<p>Logging is a great tool for debugging JavaScript. Both Firefox and Google Chrome support "console.log".</p>

<?php render_code_block('JavaScript','console_log.js', 'Debugging variables at runtime.'); ?>

<h3 class="add_to_toc">Exercise: Console Logging</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
        <li>Create code that will output the result of 5 + 5 to the console.</li>
        <li>Move this sum to a different line other than the console.log line and insert a break point using Google Chrome.</li>
		<p>You will have to view the JavaScript in the source code browser of Google Chrome to insert a break point. Try clicking on the left side next to the code to create the break point.</p>
		<li>Open the same script in Internet Explorer and note the difference.</li>
    <ol>
</div>

<h3 class="add_to_toc">Variables</h3>
<p>Variables are declared using the <span style="font-style:italic">var</span> keyword. In JavaScript it’s important to use the <span style="font-style:italic">var</span> keyword when declaring variables as not using the <span style="font-style:italic">var</span> keyword will cause the variable to be created in the global scope. There will be more on scope within JavaScript when functions are introduced. We can declare variables in a number of ways and it is commonplace to assign to variables as we declare them.</p>

<?php render_code_block('JavaScript','variables.js', 'Declaring JavaScript variables.'); ?>

<h3 class="add_to_toc">Exercise: Variables</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
        <li>In that script tag create a string called "Steve" and set its value to any string</li>
        <li>Create a variable called "Pi" and set it to 3.14159.</li>
        <li>Use the plus sign operator to add Steve to Pi and note what happens</li>
		<p>Note how the number gets converted as a string. That's because + adds numbers as well as concatenates strings. This can be confusing to have the same operator on a dynamically typed language so make sure you always have the right types when dealing with the + operator.  This is a mistake within the design of JavaScript.</p>
    <ol>
</div>

<h3 class="add_to_toc">Types</h3>
<p>Javascript like other programming languages has types.  Types are the different kinds of data that a programming language supports.  Javascript has fewer types than most other languages. These types are...</p> 

<p>Numbers. Javascript has only one number type called number. Numbers can be floating points as well as integers.</p>
<?php render_code_block('JavaScript','type_number.js', 'Numbers in JavaScript'); ?>

<p>Strings. Javascript has a string type. Strings behave in the same way they do in other languages. Strings can use single or double quotes.</p>
<?php render_code_block('JavaScript','type_string.js', 'Strings in JavaScript'); ?>

<p>Booleans. Booleans are values that can be set to either true or false</p>
<?php render_code_block('JavaScript','type_boolean.js', 'Booleans in JavaScript'); ?>

<p>Arrays. Arrays are zero indexed in JavaScript. Arrays can be created using [] notation. Never use the new keyword to create a new array in JavaScript(or anything else for that matter) as you can risk clobbering the global object. There are several handy methods built in to the JavaScript Array.</p>
<?php render_code_block('JavaScript','type_array.js', 'Arrays in JavaScript'); ?>

<h3 class="add_to_toc">Exercise: Arrays</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
		<li>Create an array for a golfer playing a golf game</li>
		<p>The array should be multi dimensional. One array should represent a round and an array of these arrays will represent the tournament score.</p>
		<li>Add the scores for each round and the whole tournament</li>
		<p>The last part is tricky at this stage. You might want to read on to loops before attempting this one.</p>
    <ol>
</div>


<p>Objects. Objects work differently in JavaScript than they do in classical object orientated languages. Objects in JavaScript can be created with the {} notation. There will be more on objects later in these tutorials. Never create objects with the new keyword. Always use the literal notation.</p>
<?php render_code_block('JavaScript','type_object.js', 'Objects in JavaScript'); ?>


<h3 class="add_to_toc">Operators</h3>
<p>JavaScript supports a number of operators. It’s worth noting that all of these operators behave
in the same way you would expect them to behave in a language like PHP. With one exception, JavaScript has an "exactly equals" operator. This operator is expressed with three equals signs next to each other. When ever comparing variables JavaScript always use the "exactly equals" operator and not the equals operator.
</p>

<h3 class="add_to_toc">Exercise: Operators</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
		<li>Write an operation that evaluates (.1 + .2) to equal .3</li>
        <p>"console.log((.1 + .2) === .3);"</p>
		<li>Note the results</li>
        <p>Note this returns false! It should not. This is an issue with the numbering system Javascript uses. Javascript unlike other languages has only one type of number. This type is called number and is IEEE floating point. Having one number in the language is a great idea but they chose the wrong number type.</p>
    <ol>
</div>

<?php render_code_block('JavaScript','operators.js', 'Javascript operators.'); ?>

<h3 class="add_to_toc">Comments</h3>
<p>Comments and JavaScript can be made either by the // of the */. Either form of notation is acceptable.</p>

<?php render_code_block('JavaScript','comments.js', 'Comments in JavaScript.'); ?>


<?php include '../../disqus.php'; ?>
<?php include '../../footer.php'; ?>
