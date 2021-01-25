<?php
function askHungry($question)
{
    $isHungry = readline($question . '(y/n): ');
    if (strtolower(trim($isHungry)) == 'n') {
        echo "Have a good day!";
        exit;
    } else if (strtolower(trim($isHungry)) == 'y') {
        require 'veggies.php';
        $randomVeggie = $veggies[random_int(0, sizeof($veggies) - 1)];
        echo "Eat this $randomVeggie! Have a good day!\n\n";
        askHungry("Are you still hungry?");
    } else {
        echo "Something went wrong\n:C\n\n";
        askHungry("Are you hungry?");
    }
}

echo "Hello!\nWelcome!\n\n";
askHungry("Are you hungry?");