<?php
// SUPERGLOBALS
// $GLOBALS
$y = 22;
function myFunction() {
    echo $GLOBALS ["y"];
}

myFunction();


echo "<br>";


function myFunctional() {
    echo $GLOBALS ["y"];
}

myFunctional();

// 28/11/2024
// $_SERVER

echo "<br>";
echo $_SERVER["PHP_SELF"];

echo "<br>";
echo $_SERVER["SERVER_NAME"];
?>

<form action = "<?php echo $_SERVER["PHP_SELF"]?>" method = "POST">

<input type = "text" placeholder = "First Name" name = "fname">
<br><br>
<input type = "text" placeholder = "Last Name" name = "lname">
<br><br>
<button type = "submit">Submit</button>

</form>


<?php
$firstName = $lastName = "";
// initialize variable to empty string

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // checking if form is submitted via POST method

   $firstName = htmlspecialchars ($_POST["fname"]);
   // $_POST["fname"] holds form data of form that used post method

   $lastName = $_POST["lname"];

   echo "<h2> Good Afternoon $firstName $lastName </h2>";
}


?>