<?php
/*
+---+
| 1 |
+---+
Declare variable named redLight and 
assign it with the value true.
*/
$redLight = true;
/*
Use "if" statement to check if the red light is on,
if so, print "Stop the car!".
*/
if($redLight === true){
    echo "Stop the car!\n";

/*
If the red light is on, use ternary operator to print "Stop the car!" as a paragraph.
*/

echo ($redLight === true) ? "It's red! Oh my god, we're about to crash!" : $redLight["Stop the car!"];
}
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Reasign redLight with the value false.
*/

$redLight = false;

/*
Use if/else statement to check if the red light is on,
if so, print "Stop the car!", otherwise print "Are you sure that yellow light is not on?".
*/

if($redLight === true){
    echo "Stop the car!";
}else{
    echo "Are you sure that yellow light is not on?";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare variable named yellowLight and 
assign it with the value false.
*/

$yellowLight = false;

/*
Use if/else statement to check if the red or yellow light is on,
if so, print "Stop the car!", otherwise print "Are you sure that traffic lights are working at all?".
*/

if($yellowLight === true || $redLight === true){
    echo "Stop the car!";
}else{
    echo "Are you sure that yellow light is not on?";
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare variable named greenLight and 
assign it with the value false.
*/

$greenLight = false;

/*
Use if/else-if/else statement.

Check if the red or yellow light is on, and the green light is off,
if so, print "Stop the car!".

Next, check if the red and yellow and green light is off,
In this case, print "Power outage!".

Next, check if the red and yellow light is off, and the green light is on.
In this case, print "Keep moving!";

Next, check if the red or yellow light is on, and the green light is on too.
In this case, print "Traffic lights are messed up!".

In any other case, print "Use the common sense and stay safe!".
*/

if($yellowLight === true || $redLight === true && $greenLight === false){
    echo "Stop the car!";
}elseif($yellowLight === false || $redLight === false && $greenLight === false){
    echo "Power outage!";
}
elseif($yellowLight === false || $redLight === false && $greenLight === true){
    echo "Keep moving!";
}
elseif($yellowLight === true || $redLight === true && $greenLight === true){
    echo "Traffic lights are messed up!";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Handle the problem from the task 4 with switch-statement!
The referencial value will be true.
*/

switch($redLight || $yellowLight && $greenLight){
    case true || true && false:
        echo "Stop the car!";
    break;    
    case false || false && false:
        echo "Power outage!";
    break; 
    case false || false && true:
        echo "Keep moving!";
    break; 
    case true || true && true:
        echo "Traffic lights are messed up!";
    break;
}
?>