<?php include "../../header.php"; ?>

<h1>Javascript Basics</h1>
<p>As mentioned in the first exercise <a href="/tutorials/javascript_introduction">what becomes of the javascripted?</a> JavaScript is a prototypical scripting language. If you have not already completed the first exercise go back and complete it now before continuing with this exercise.</p>

<p>Prototype-based languages differ from classical object orientated languages. When writing JavaScript we do not create classes. We can simulate classes by using Java objects however there is no way to define a class in the classical way. New JavaScript programmers may find this inhibiting. Particularly those coming from a C++ and Java background. It also causes a lot of confusion as many developers approach the language with the mindset of classical object orientation. This is a mistake to be avoided as approaching JavaScript in this way will most likely result in buggy code and frustration.</p>


<h3>Built in Functions</h3>

<p>We have already used the console.log function which is a built-in JavaScript function. JavaScript has other built-in functions. These include...</p>

<p><strong>Alert:</strong> The alert() function will display a message to the user. This message is created by the browser and the exact behaviour of this message may differ from platform to platform and from browser to browser. All modern browsers support this function. This function enjoys its best use whenever the user needs to have information displayed to them immediately.</p>

<?php render_code_block('javascript', "alert.js", "Alerts in javascript"); ?>

<p><strong>Confirm:</strong> The confirm function is another prompt window much like alert. Opposed to alert the confirm function requires the user to click one of two buttons. The first button is okay and the second button is council. This function returns of boolean value depending on which button has been clicked. If okay has been clicked the return value is true. If council was clicked the return value will be false.</p>

<?php render_code_block('javascript', "confirm.js", "Confirmations in javascript"); ?>


<p><strong>Settimeout:</strong> to save time our function facilitates the execution of code after a specific time. This time is set in milliseconds. After the amount of milliseconds has expired code will function that is passed as the first parameter is executed. This allows us to perform tired events on a webpage. A good use of the set timeout function would be clock functionality or even animating part of the page.</p>


<?php render_code_block('javascript', "set_timeout.js", "Set timeout in javascript"); ?>


<p><strong>Set interval:</strong> Percent interval method can be used to periodically call a section of JavaScript code. It said it will method differs from the set time up method as it will keep calling that piece of code until stopped. The set Interval method would be an ideal method to use while programming a JavaScript game as games require a game loop.</p>

<?php render_code_block('javascript', "set_interval.js", "Set interval in javascript"); ?>

<h3>User Functions</h3>

<p>Functions represent what is arguably one of JavaScript’s most powerful features. Function-based programming is commonplace with JavaScript developers. Because JavaScript is a very flexible and dynamic language functions can be used in a number of ways. Functions can be declared in a classical way similar to languages such as C and PHP.</p>

<?php render_code_block('javascript', "classical_functions.js", "A classical function in javascript"); ?>

<p>Functions can also be declared as first level variables. This allows us to define a function and then assign it to a variable. This functionality is in contrast to languages such as PHP and C. A function to put it like this creates a new variable. This variable as type of function. In the first exercise this type was not mentioned.</p>

<<functions assigned to a variable>>

Functions that are defined in this way are known as anonymous functions. Anonymous functions are used extensively in JavaScript libraries and frameworks. Anonymous functions make it very easy to define programming interfaces. We can even write our own for each loop using an anonymous function. In the example below we define a function that loops through an array. The function accepts a function as its first parameter. Each time the array loops the function that is passed in is executed. Other languages such as PHP and Java perform very similar operations internally. JavaScript itself doesn’t have a for each loop, this is because they are so easy to write given the language constructs.

<<our own foreach loop example>>

Having first-class functions is a massive advantage. We can have an array of options that we need to execute, or we can pass functions to other functions. Being able to work with functions in this way allows us to create very descriptive code that is both easy to write and easy to maintain. Creating functions in this way also allows us to asssign functions to object properties simulating the behaviour of an object in classically object orientated languages such as Java and C++.

<< functions assigned to an object >>
Objects
As mentioned in a previous section JavaScript is a prototypical language that does not support classes. JavaScript does however have objects. Objects in JavaScript are very flexible and provide an excellent way of working with JavaScript code. Objects can be thought of a map of data and functions in much the same way a class is though of. An object exists in JavaScript is a single variable. An object can then be assigned various properties which include both data and functions.

<<example calling an object property>>

As JavaScript is a weekly type language we can set our object properties to be anything kind of variable we like. This includes functions.

<<example and object with functions>>

We can also mix the two having both data and functions as the property of an object.

<<example mixed>>

This as powerful as it allows us to simulate classes within JavaScript. A common pattern to use is the constructor function pattern. Constructive functions are simply a first-class function in JavaScript that creates an object. The object is assigned properties that contain and carry out particular operations relating to the object.

<< person object constructor function example>>

Objects can also be sent over the network using JavaScript object notation. JSON encoding is now supported by many server side scripting languages including PHP. JSON can be constructed as a string with a server side scripting language such as PHP. It can then be interpreted by JavaScript as a runtime object and its properties can be accessed as such.

<<JSON example>>
Arrays
Arrays in JavaScript work much the same way as a race in other languages. Arrays in JavaScript a zero indexed so the first element in the array is accessed with an index of zero.

<<creating arrays and referencing arrays example>>
Conditions and control structures
JavaScript supports conditional statements and control structures in much the same way Java and PHP do. JavaScript adopts these control structures from C.

If statements support if’s else if’s and else’s.

<< if else elseif exmaple>>

JavaScript also supports for loops. For loops in JavaScript are set up in the same way they are in C style languages. As is the case with other languages when constructing for loop we must first know how many times we intend to loop. To use this amount to set up the guard condition of the loop.

<<for loop example>>

JavaScript also supports while loops. A while loop as a single guard condition. While this guard condition is said to true a while continue. The loop will continue until the guard condition is set to false.

<<while loop example>>

JavaScript also has a for in loop. This loop will loop each property of a given object. Useful if we have an object with functions that we wish to call.

<<for in example>>
Scope
A common issue that is reported by new JavaScript developers is that of scope. Scope refers to the lexical context of a program at a particular point of its run-time. As JavaScript is not a class-based language scope behaviour is different and it must properly understood will cause frustration. Again, much of this frustration will be felt by users of C++ and Java as they are classically object orientated languages.

Scope essentially boils down to what data you can access at what time. For example data in one function cannot be accessed from a different function.

<< two separate functions with their own scope example>>

Variables that are created outside a function accessible from inside a function.

<<after variable be accessed by a function>>

Any variables that we create inside a function are destroyed as soon as we leave the function.

<<function scope example>>

when we are writing code outside any kind of function we are writing code in the global scope. Writing code in the global scope is potentially dangerous. As JavaScript is totally dynamic it is possible to reassign variables that have already been created. It’s also possible to reassign built-in variables. At any time we can redefine built-in variables in JavaScript. We can delete the built-in array and replace it with a one implementation. The reason this feature was built into JavaScript is most likely to to JavaScript is short development time. The language was created in a matter of weeks. The language designer anticipated problems when the language was launched. Therefore the decision was made to make every part of JavaScript dynamic. This would allow users to fix any problems in the language after the language was released. While this decision facilitated JavaScript framework and library developers are made JavaScript development potentially dangerous. Whenever we are working in the global scope we must consider what variables we are creating if we create a variable with the same name as a built-in variable there will be no error report by JavaScript. It will allow this code to run and “clobber” the existing variable.

<<example global scope clobbering>>

<<Execise: Call built in functions>>
<<Execise: Define a user function>>
<<Execise: Create an object and call it>>
<<Execise: Create an array and loop it>>
<<Execise: Set up an if statement>>

<?php include "../../footer.php"; ?>
