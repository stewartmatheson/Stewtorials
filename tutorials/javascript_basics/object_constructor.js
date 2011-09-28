function Person(first_name, last_name, age){
    //check if first name is set
    if(first_name === undefined)
        throw("Frist name must be defined");
    
    //check if last name is set
    if(last_name === undefined)
        throw("Last name must be defined");
    
    // check if the age is set
    if(age === undefined) 
        throw("Age must be defined");
    
    //make sure age is a number
    if(typeof(age) === "number") 
        throw("Age must be a number");
    
    //now set up the object that is returned.  
    this.first_name = first_name;
    this.last_name = last_name;
    this.age = age;
    this.full_name = function(){
        this.first_name + " " + this.last_name;
    };
}

//create a new person
var p = new Person("Stewart", "Matheson", 29);
p.full_name(); //"Stewart Matheson"
