//if we redeclare the array function
//then array becomes what we want it to be
var Array = function(){
    this.push = function(item){
        return "waffles!";
    }
};

//any script that creates an array
//will use our object not the 
//built in javascript object
var a = [];
a.push("hello"); //"waffles!"