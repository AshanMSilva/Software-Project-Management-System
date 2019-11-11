<?php include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
require('includes/System.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_SESSION['current_user']) and $_SESSION['logged_in']==false and isset($_POST['verify'])){
		
		# code...
		if (isset($_SESSION['rand_num'])){
			$rand_num=$_SESSION['rand_num'];
			$current_user = $_SESSION['current_user'];
			$pssword = $_SESSION['pssword'];
			$email= $current_user->get_email();
			$veri_code=$_POST['veri_code'];
			$system=new System();
			$system->Email_Verification($rand_num,$current_user,$pssword,$email,$veri_code,$connection);
			//echo $veri_code;
			
		}
		else{
			$error="Click on 'Send Verification Code' to receive your code. Then enter it in the given space and Verify.";
			$_SESSION['alert']=$error;
			echo "<script> window.history.back(); </script>";		
		}
	}
	else{
		header("Location: home.php");
	}
	?>
</body>
</html>