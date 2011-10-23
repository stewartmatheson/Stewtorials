//this function will write to the log
function displayEverySecond(){
    console.log("Each Second");
}

//call the above method each second
var t = setInterval(displayEverySecond, 1000);