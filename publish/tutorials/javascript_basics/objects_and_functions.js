//create a new object called person
var person = {
    "first_name" : "Stewart",
    "last_name"  : "Matheson",
    "age"        : 29,
    "full_name"  : function(){
        return this.first_name + " " + this.last_name;
    }
};

alert(person.full_name()); //Stewart Matheson