<?php


function functionPlayer(){
    echo "please choose between the following: R for Rock, P for Paper or S for Scissors. Press X to quit";
    $userOne=stream_get_line(STDIN, 100, PHP_EOL);
    switch ($userOne){
    case "R":
    echo"Rock".PHP_EOL;
    $userOne = "Rock";
    break;
    case "P":
    echo "Paper".PHP_EOL;
    $userOne = "Paper";
    break;
    case "S":
    echo "Scissors".PHP_EOL;
    $userOne = "Scissors";
    break;
    case "X":
    echo "You've chosen to end the game";
    $userOne = "X";
}
    return $userOne;
}

//need to call the function to run the code and give it a value for conditional logic
//i then moved the call function to the bottom so that i could run my loop after the functions and before its called
//it also allowed me to move switch/case conditionals to within the function itself alongside the generation
//of the call. this means its all put together inside the function and looks neater

function functionCPU(){
    $genCPU = rand (0,2);
    switch ($genCPU){
    case "0":
    echo "Rock".PHP_EOL;
    $genCPU = "Rock";
    break;
    case "1":
    echo "Paper".PHP_EOL;
    $genCPU = "Paper";
    break;
    case "2":
    echo "Scissors".PHP_EOL;
    $genCPU = "Scissors";
    break;
}
    return $genCPU;
}


//need to call the function to run the code and give it a variable for the conditional logic
//again as above, moved below to separate functions from code to run the game


//logic for comparing user and CPU/ I made it into a function 
//created function for whoWins - parameters are values from userOne & CPU
//entered game logic in argument, return game logic as the outcome
// called function at the end with user and CPU as arguments 

function whoWins ($userOne,$genCPU){  
    
if(($userOne!="X")&&($userOne === $genCPU)){
    return "Tie".PHP_EOL;
}
else if (($userOne!="X")&&($userOne === "Rock")&&($genCPU === "Scissors")){
        return "Rock wins".PHP_EOL;      
}
else if (($userOne!="X")&&($userOne!="X")&&($userOne === "Rock")&&($genCPU === "Paper")){
        return "Paper wins".PHP_EOL;
}
else if (($userOne!="X")&&($userOne === "Paper")&&($genCPU=== "Rock")){
        return "Paper wins".PHP_EOL;
}
else if (($userOne!="X")&&($userOne === "Paper")&&($genCPU ==="Scissors")){
        return "Scissors wins".PHP_EOL;
    }   
else if (($userOne!="X")&&($userOne === "Scissors")&&($genCPU ==="Rock")) {
        return "Rock wins".PHP_EOL;
}
else if (($userOne!="X")&&($userOne === "Scissors")&&($genCPU==="Paper")) {
    return "Paper wins".PHP_EOL;
}
}
//below is the essential code of RPS to execute the game. above is the declaration of the functinons
do {
$userOne = functionPlayer();   //here i am calling each function into the code
$genCPU = functionCPU();
$result = whoWins($userOne, $genCPU); //i then call the game outcome function with variables from each function above
echo "And the winner is". "  ";
echo $result;
} while ($userOne!="X");

if ($userOne = "X");
die ("Sorry, Game Over");



 /* break out of it with x 
  * could add loop do while or while  and continue so x if drops out  **
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

