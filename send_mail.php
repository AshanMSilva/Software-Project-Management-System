<?php require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
require('includes/System.php');
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
		$system =new System();
		$system->SendMail($email);
		//$to = $email;		// receiver email
		
	} ?>
</body>
</html>