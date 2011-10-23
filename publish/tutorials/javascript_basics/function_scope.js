var everyWhere = "Seen from anywhere";

function a(){
    var justInFunctionA = "Only seen in function a";
    console.log(everyWhere); // "Seen from anywhere";
}

function b(){
    console.log(justInFunctionA); // undefined
    console.log(everyWhere); // "Seen from anywhere";   
}