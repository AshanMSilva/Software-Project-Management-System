<?php include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Admin.php');
require('includes/Employee.php');
require('includes/System.php');
session_start();
$system =new System();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
</head>
<body>
<h1>Log In</h1>
	<?php
	if ( (!isset($_SESSION['logged_in'])) or $_SESSION['logged_in']==false){
		$email = $_POST['email'];
		$pssword = $_POST['psw1'];
		$system->Login($email,$pssword,$connection);
		
	} ?>
</body>
</html>