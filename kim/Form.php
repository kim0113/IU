<?php
session_start();

if($_SESSION['userName'] == ""){    
    header("location:PHPForms.php");

}

$userName = $_SESSION['userName'];
/*$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$email = $_SESSION['email'];
$age = $_SESSION['age'];
*/
echo $userName;
/* echo "<br>";
echo $firstName;
echo $lastName;
echo "<br>";
echo $email; 
echo $age; */
echo "<br>";

?>

<br>

<a href = "logout.php">Logout</a>