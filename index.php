<?php
echo "my website <br>";

$myName = 'Israel';

var_dump($myName);

$valuableYearsOfExperience = 5;

echo "<br>";

var_dump($valuableYearsOfExperience);

$height = 6.1;

echo "<br>";

var_dump($height);

$isMale = true;

echo "<br>";

var_dump($isMale);

// array 
$fullName = array('Israel', 'Chukwudinma', 'Osahenye');
echo "<br>";
var_dump($fullName);
echo "<br>";
echo $fullName[1];

echo '<br>';

echo "my first name is $fullName[0] 
and my surname is $fullName[2]";

// 28/10/2024

// NULL
$nothing = null;

echo "<br>";

var_dump($nothing);

// constant
define("pi", 3.142);
echo "<br>";
var_dump(pi);

const gravityAcceleration = 10;

echo "<br>";
var_dump(gravityAcceleration);

// 31/10/2024

// OPERATORS
// Arithmetic Operators
// Addition Operation
$x = 10;
$y = 5;
echo "<br>";
echo $x + $y;
//Subtrsction Operation
echo "<br>";
echo $x - $y;
//Multiplication Operation
echo "<br>";
echo $x * $y;
//Division Operation
echo "<br>";
echo $x / $y;
//Modulus Operation
echo "<br>";
echo $x % $y;
//Exponential Operation
echo "<br>";
echo $x ** $y;

//Increment and Decrement Operator
//Increment Operation
echo "<br>";
$x++;

echo $x;
//Decrement Operation
echo "<br>";
$x--;

echo $x;

// 01/11/2024
// ASSIGNMENT OPERATORS
echo "<br>";
$a = 100;
$b = 50;
// Addition Assignment
$a += $b;
echo $a;
// Subtraction Assignment
echo "<br>";
$c = 40;
$d = 2;

$c -= $d;
echo $c;
// Division Assignment
echo "<br>";
$e = 800;
$f = 80;

$e /= $f;
echo $e;
// Multiplication Assignment
echo "<br>";
$g = 60;
$h = 5;

$g *= $h;
echo $g;
// Exponential Assignment
echo "<br>";
$i = 60;
$j = 2;

$i **= $j;
echo $i;

// Logical Operators
// AND (&&), OR (||), XOR, NOT(!)
// AND (&&) Logical Operator
echo "<br>";

if ($x == 10 && $y == 5) {
    echo "We are good to go.";
}
// OR (||) Logical Operator
echo "<br>";

if ($x == 10 || $y == 50) {
    echo "Jesus Is King";
}
// XOR
echo "<br>";

if ($x ==10 XOR $y ==500) {
    echo "All things shall pass away, but Your Word is forever";
}
// NOT (!) Logical Operator
echo "<br>";

if (!($x == 101) ) {
    echo "A Glorious Inheritance that can never perish or fade away";
}

// 04/11/2024
// CONDITIONAL STATEMENTS
// The IF Conditional Statement

echo "<br>";

if (7>3) {
    echo "Have a good day";
}

echo "<br>";
$myName = "Israel";

$presentTime = date (format: "H:i");

echo "<br>";

echo "present time: $presentTime <br>";

if ($presentTime >= 00.00 && $presentTime < 12.00) {
    echo "<h3> Good Morning, $myName! </h3>";
}

elseif ($presentTime >= 12.00 && $presentTime < 16.00) {
    echo "<h3> Good Afternoon, $myName! </h3>";
}

elseif ($presentTime >= 16.00 && $presentTime < 23.59) {
    echo "<h3> Good Night, $myName! </h3>";
}

else {
    echo "<h3> Hello, $myName! </h3>";

}

// 08/11/2024

// SWITCH STATEMENTS
//

$today = date (format: "D");
echo "Today is: $today <br>";


switch ($today) {
    case "Mon";
        echo "Hello everyone, it's Monday. Have a great week.";
        break;
    case "Tue";
        echo "Hello everyone, it's Tuesday. Do have a splendid week";
        break;
    case "Wed";
        echo "Hello everyone, it's Wednesday. Do have a miraculous week";
        break;
    case "Thur";
        echo "Hello everyone, it's Thursday. Do have a blissful week";
        break;
    case "Fri";
        echo "Hello everyone, it's Friday. Do have a wonderful weekend";
        break;
    case "Sat";
        echo "Hello everyone, it's Saturday. Do have a beautiful weekend";
        break;
    case "Sun";
        echo "Hello everyone, it's Sunday. Do have a fantastic weekend";
        break;
    default;
        echo "Sorry, this is not a day in the week";
        break;
}


// PHP LOOPS
// While Loops

echo "<br>";

$j = 2;
while ($j < 8) {
    echo $j;
    $j++;
}

echo "<br>";

$j = 2;
while ($j <= 8) {
    echo $j;
    $j++;
}

// 11/11/2024
// While Loops (contd.)
echo "<br>";
$numbers = 1;
while ($numbers <= 10) {
    echo $numbers."<br>";
    $numbers++;
}

// Do-While Loops

echo "<br>";
$f = 5;

do {
    echo $f."<br>";
    $f++;
} while ($f <= 10);

// For Loops

echo "<br>";

for ($v=1; $v <=10 ; $v++) {
        echo $v."<br>";
}

// For-Each Loop

echo "<br>";
$cars = array("BMW", "Lexus", "Ferrari", "RollsRoyce");

foreach ($cars as $key) {
    echo "I love $key.<br>";
}


for ($x=1; $x <=100 ; $x++) { 
    if ($x % 3 == 0) {
        echo "fizz.<br>";
    } elseif ($x % 5 == 0) {
        echo "buzz.<br>";    
    } else {
        echo $x."<br>";
    }
}

// 15/11/2024
//ARRAY

echo "<br>";
$domesticanimals = array("dogs", "cats", "mouse", "hamster", "parrot");
$cities = ["Lagos", "Abuja", "Barcelona", "Munich", "Jerusalem"];

echo $domesticanimals[0]."<br>";

//Types Of Array Functions
//Count Function
echo count($cities);

//Array Push Function
echo "<br>";
array_push($cities, "Seoul", "Brighton", "Lisbon", "Madrid");

var_dump($cities);

$cities[2] = "Gibraltar";
echo "<br>";

var_dump($cities);

// Types Of Array
//Associative Array
echo "<br>";
$phone = ["Brand"=>"Samsung", "Model"=>"Galaxy S24", "Colour"=>"Green", "ROM"=>512];

var_dump($phone);

$phone["Model"] = "Galaxy S25";
echo "<br>";

var_dump($phone);

// 18/11/2024
// FUNCTION

function greetMe() {
echo "<br> Good Afternoon";
}

greetMe();

// 25/11/2024

function streetName ($name){
    echo "$name Asaba, <br>";

}

    echo "<br>";

streetName ("DLA");

streetName ("PRINCE");

echo "<br>";

function homeAdress ($number, $name){
    echo "$number street $name Asaba, <br>";

}

    echo "<br>";

homeAdress ("5th", "DLA");

homeAdress ("7th", "PRINCE");
?>