<?php

session_start();
if($_SESSION)
	{header ("location:Form.php");

	}
if($_SERVER['REQUEST_METHOD'] == "POST"){


	$_SESSION['userName'] = $_POST['userName'];
	/*$_SESSION['firstName'] = $_POST['firstName'];
	$_SESSION['lastName'] = $_POST['lastName'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['age'] = $_POST['age']; */
	header ("location:Form.php");
}
	
?>


<html>
<head>
<title> PHP Forms </title>
</head>

<body>

<form action = "<?php $_SERVER['PHP_SELF']?>" method = "post">
<input type = "text"  name = "userName" placeholder = "Username">
<br>
<!--<input type = "text"  name = "firstName" placeholder = "First Name">
<br>
<input type = "text"  name = "lastName" placeholder = "Last Name">
<br>
<input type = "text"  name = "email" placeholder = "Email">
<br>
<input type = "text"  name = "age" placeholder = "Age"> 
<br>-->
<input type = "password"  name = "password" placeholder = "Password">
<br>
<input type = "submit" value = "Login">
</form>

</body>
</html>