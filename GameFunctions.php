<?php

//back-end functionality of game

function functionPlayer($userInput) {
    //echo "please choose between the following: R for Rock, P for Paper or S for Scissors. Press X to quit";
    //$player=stream_get_line(STDIN, 100, PHP_EOL);
    switch ($userInput) {
        case "R":
            $userInput = "Rock";
            break;
        case "P":
            $userInput = "Paper";
            break;
        case "S":
            $userInput = "Scissors";
            break;
    }
    return $userInput;
}

function functionCPU() {
    $genCPU = rand(0, 2);
    switch ($genCPU) {
        case "0":
            $genCPU = "Rock";
            break;
        case "1":
            $genCPU = "Paper";
            break;
        case "2":
            $genCPU = "Scissors";
            break;
    }
    return $genCPU;
}

function gameplay($player, $cpu1) {
    echo "$player selected by the User" . " " . "and the computer chose $cpu1" . PHP_EOL;
}

function whoWins($userInput, $genCPU) {

    if ($userInput === $genCPU) {
        echo "...Tie" . PHP_EOL;
    } else if (($userInput === "Rock") && ($genCPU === "Scissors")) {
        echo "...Rock wins" . PHP_EOL;
    } else if (($userInput === "Rock") && ($genCPU === "Paper")) {
        echo "...Paper wins" . PHP_EOL;
    } else if (($userInput === "Paper") && ($genCPU === "Rock")) {
        echo "...Paper wins" . PHP_EOL;
    } else if (($userInput === "Paper") && ($genCPU === "Scissors")) {
        echo "...Scissors wins" . PHP_EOL;
    } else if (($userInput === "Scissors") && ($genCPU === "Rock")) {
        echo "...Rock wins" . PHP_EOL;
    } else if (($userInput === "Scissors") && ($genCPU === "Paper")) {
        echo "...Paper wins" . PHP_EOL;
    }
}

//where to put below;
//request superglobal reads parameter choice from the HTTP Request and assigns this to $userChoice
//below is the essential code of RPS to execute the game. above iss the declaration of the functions

do {
    $userChoice = $_REQUEST["choice"]; //calling superglobal
    $userChoice = functionPlayer($userChoice);
    $genCPU = functionCPU();
    gameplay($userChoice, $genCPU);
    whoWins($userChoice, $genCPU); //i then call the game outcome function with variables from each function above
} while ($userChoice == 'true'); //whilst user choice selected







