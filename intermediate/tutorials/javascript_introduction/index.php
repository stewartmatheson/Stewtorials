<?php include '../../header.php'; ?>

<h1>Introduction to Javascript</h1>
<p>Javascript is a prototypical scripting language. Javascript is mostly downloaded via a web page and executed on the client machine. Most modern web browsers include an implementation of javascript. This is also true for most mobile devices including the iPhone. As a programming language JavaScript implements C style syntax and is based on lisp and scheme.  When considering programming languages for the client side scripting environment JavaScript is generally the only choice.</p>
<p>Javascript enjoys a diverse audience of users, more so than most other programming languages. This coupled with the fact that javascript behaves like scheme and looks like C leads to javascript being one of the worlds most misunderstood programming languages. Javascript does not follow a classical object-orientated design causing more developer frustration.</p>

<h3 class="add_to_toc">Exercise: Download and Install Chrome</h3>
<div class="exercise">
    <ol>
        <li>Download google chrome web browser</li>
        <li>Right click on any web page and click "Inspect element". A window should open up across the bottom of the browser.</li>
        <li>In the newly opened window click the "Console" button. Note: this should work on any page including your own.</li>
        <li>Click your cursor next tot he blue grater than sign.</li>
        <li>Type "alert("Hello World!");" and press enter</li>
        
        <p>Once you hit enter then there should be a alert box pop-up. This is because we are running javascript in real time. Any javascript statement can be typed in to this box and executed in this way. Its very handy for debugging and a great way to learn about javascript.<p/>
    </ol>
</div>

<h3 class="add_to_toc">History of Javascript</h3>
<p>Javascript was developed during the mid 90’s for Netscape. Originally called Mocha and then live script it was developed to allow web developers to script on the web.  Around the time of JavaScript’s  development Java applets where popular and the preferred way of adding interactivity to web pages. Javascript was seen as Java’s poor cousin and treated as such by many developers at the time. As applets declined in popularity javascript became more prominent. As ajax was developed allowing pages to make asynchronous requests to servers JavaScript underwent a renascence.  Ajax popularised javascript and forced many developers to take the language seriously.  Many more developers use javascript than ever before and the language is taken more seriously in development communities.  Javascript now days forms a fundamental part of the Internet and there are many libraries and frameworks available. Javascript also has implementations that run on servers such as Rhino and node.js which is based on the google V8 javascript engine.</p>

<h3 class="add_to_toc">Use</h3>
<p>Javascript has many different uses as a programming language. It’s primary use is scripting for web pages. Javascript can be used to change a web page by...</p>
<ul>
    <li>Adding HTML elements</li>
    <li>Removing HTML elements</li>
    <li>Changing the attributes of HTML elements</li>
    <li>Changing the CSS of HTML elements</li>
    <li>Moving HTML elements</li>
</ul>



<h3 class="add_to_toc">Exercise: Hello World</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
        <li>Create an alert box using the code: "alert('Hello World!');"</li>
		<p>Note that you should not include the quotes in your code. It's also worth noting that you don't have to place your file in a server anywhere. The code is run though the browser.</p>
    <ol>
</div>



<h3 class="add_to_toc">Writing</h3>
<p>When writing javascript for the client browser to be included in web pages we must use the script tag. The script tag appears within head and allows javascript to be executed on a page. Scripts included in the script tag can be either written in-line as part of the tag or in an external file. Generally these files have the extension .js.</p>

<?php render_code_block('html','1.html', 'Writing javascript inline.'); ?>
<?php render_code_block('html','2.html', 'Including a javascript source file in a html document.'); ?>

<p>Some browsers include a javascript console with the browser. This allows developers to write javascript on their page line by line. Consoles like this are a powerful tool when trying to debug scripts. One such browser that offers a javascript console is google chrome. Google chrome offers a toolkit allowing javascript developers to write small sections of javascript code and have them instantly run on the loaded page. Chrome also allows users to place break points on our scripts and view what variables when these breakpoints are hit. Much the same way as Microsoft's Visual Studio handles break points.</p>

<h3 class="add_to_toc">Console Logging</h3>
<p>Logging is a great tool for debugging javascript. Both Firefox and google chrome support console.log.</p>
<?php render_code_block('javascript','console_log.js', 'Debugging variables at runtime.'); ?>



<h3 class="add_to_toc">Exercise: Console Logging</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
        <li>Create code that will output the result of 5 + 5 to the console.</li>
        <li>Move this sum to a different line other than the console.log line and insert a break point using google chrome.</li>
		<p>You will have to view the javascript in the source code browser of google chrome to insert a break point. Try clicking on the left side next to the code to create the break point.</p>
		<li>Open the same script in Internet Explorer and note the difference.</li>
    <ol>
</div>




<h3 class="add_to_toc">Variables</h3>
<p>Variables are declared using the var keyword. In javascript it’s important to use the var keyword when declaring variables as not using the var keyword will cause the variable to be created in the global scope. There will be more on scopes within javascript when functions are introduced. We can declare variables in a number of ways and it is commonplace to assign to variables as we declare them.</p>

<?php render_code_block('javascript','variables.js', 'Declaring javascript variables.'); ?>

<h3 class="add_to_toc">Exercise: Variables</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
        <li>In that script tag create a string called "Steve" and set its value to any string</li>
        <li>Create a variable called "Pi" and set it to pi.</li>
        <li>Use the plus sign operator to add Steve to Pi and note what happens</li>
		<p>Note how the number gets converted as a string. Thats because + adds numbers as well as concatenates strings. This can be confusing to have the same operator on a dynamically typed language so make sure you always have the right types when dealing with the + operator.</p>
    <ol>
</div>



<h3 class="add_to_toc">Types</h3>
<p>Javascript like other programming languages has types.  Types are the different kinds of data that a programming language supports.  Javascript has fewer types than most other languages. These types are.</p> 

<p>Numbers. Javascript has only one number type called number. Numbers can be floating points as well as integers.</p>
<?php render_code_block('javascript','type_number.js', 'Numbers in javascript'); ?>

<p>Strings. Javascript has a string type. Strings behave in the same way they do in other languages. Strings can use single or double quotes.</p>
<?php render_code_block('javascript','type_string.js', 'Strings in javascript'); ?>

<p>Booleans. Booleans are values that can be set to true or false</p>
<?php render_code_block('javascript','type_boolean.js', 'Booleans in javascript'); ?>

<p>Arrays. Arrays are zero indexed in JavaScript. Arrays can be created using [] notation. Never used the new keyword to create a new array in JavaScript. There are several handy methods built in to the JavaScript array prototype.</p>
<?php render_code_block('javascript','type_array.js', 'Arrays in javascript'); ?>

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


<p>Objects. Objects work differently in javascript than they do in classical object orientated languages. Objects in javascript can be created with the {}. There will be more on objects later in these tutorials. Never create objects with the new keyword. Always use the literal notation.</p>
<?php render_code_block('javascript','type_object.js', 'Objects in javascript'); ?>


<h3 class="add_to_toc">Operators</h3>
<p>JavaScript supports a number of operators. It’s worth noting that all of these operators behave
in the same way you would expect them to behave in a language like PHP. With one exception. JavaScript has it exactly equals operator. This operator is expressed with three equals signs next to each other. When ever comparing variables JavaScript always use the exactly equals operator and not the equals operator.
</p>

<h3 class="add_to_toc">Exercise: Operators</h3>
<div class="exercise">
    <ol>
        <li>Create a new HTML file</li>
        <li>Create a script Tag in that new file</li>
		<li>Write an operation that evaluates (.1 + .2) to equal .3</li>
        <p>"console.log((.1 + .2) == .3);"</p>
		<li>Write the same operation with triple equals</li>
        <p>"console.log((.1 + .2) === .3);"</p>
		<li>Note the results</li>
    <ol>
</div>

<?php render_code_block('javascript','operators.js', 'Javascript operators.'); ?>

<h3 class="add_to_toc">Comments</h3>
<p>Comments and JavaScript can be made either by the // of the */. Either form of notation is acceptable.</p>

<?php render_code_block('javascript','comments.js', 'Comments in javascript.'); ?>


<?php include '../../disqus.php'; ?>
<?php include '../../footer.php'; ?>
