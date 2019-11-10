<?php require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_POST['send_code'])){
		$current_user=$_SESSION['current_user'];
		$email= $current_user->get_email();
		//$to = $email;		// receiver email
		$header = "From: ashansilva.17@cse.mrt.ac.lk"; 	// sender email
		$rand_num = substr(str_shuffle("0123456789"),0,5);
		$msg = "Enter the received verification code at the webpage.\n\nVerification Code: " . "{$rand_num}";
		if (mail($email, 'CodeLab - Email Verification', $msg, $header)){
			$_SESSION['rand_num']=$rand_num;
			echo "<script> window.history.back(); </script>";
		}
		else{
			$msg = "An error occured while sending the email. Try re-sending the Verification Code. Check whether the email address is correct. Check your internet connection.";
			$_SESSION['alert'] = $msg;
			echo "<script> window.history.back(); </script>";
		}
	} ?>
</body>
</html>