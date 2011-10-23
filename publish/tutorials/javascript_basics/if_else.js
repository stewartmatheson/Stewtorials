var earthFlat = true;

if(earthFlat)
    console.log("Thanks Chris");
else
    console.log("Witch! Burn him.");
    

//the current action of a player in a platform game
//(yes you can write games in javascript) 
//check http://rawkets.com
var currentAction = "Running";
if(currentAction === "Running")
    playerRun();
else if(currentAction === "Walking")
    playerWalk();
else
    playerStanding();