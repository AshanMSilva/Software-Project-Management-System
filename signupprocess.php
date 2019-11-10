<?php session_start();
include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
require('includes/Admin.php');
require('includes/System.php');
$system =new System();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	<?php
	if (isset($_POST['submit']) and $_SESSION['logged_in']==false) {
		# code...
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$pssword = sha1($_POST['psw']);
		$acc_no = $_POST['acc_no'];
		//$repassword = sha1($_POST['repassword']);
		$psw = $_POST["psw"];
		$repsw = $_POST["repsw"];
		$system->Signup($firstname,$lastname,$email,$contact_no,$pssword,$acc_no,$psw,$repsw,$connection);
	}
	else{
		header("Location: home.php");
	}
	?>
</body>
<html>