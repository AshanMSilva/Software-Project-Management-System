<?php include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Employee.php');
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
			//echo $veri_code;
			if($rand_num==$veri_code){
				$firstname = $current_user->get_firstname();
				$lastname = $current_user->get_lastname();
				$contact_no = $current_user->get_contact_no();
				$acc_no = $current_user->get_acc_no();

					$query = "INSERT INTO client (firstname, lastname, email, contact_no, pssword, acc_no) VALUES('{$firstname}', '{$lastname}', '{$email}', {$contact_no}, '{$pssword}', '{$acc_no}')";
					mysqli_query($connection, $query);
					if (isset($_SESSION['current_user'])){
						$_SESSION['logged_in'] = True;
					}
					$queryclient = "SELECT client_id FROM client where email = '{$email}'";
					$resultclient = mysqli_query($connection, $queryclient);
					if(mysqli_num_rows($resultclient)==1){
						$recordclient = mysqli_fetch_assoc($resultclient);
						$client_id = $recordclient['client_id'];
						$current_user->set_id($client_id);
					}
					//echo "<script> window.history.go(-3); </script>";
					header("Location: home.php");
					//header("Location:homepage.php");
				}
					//$query = "INSERT INTO employee (first_name, last_name, email, contact_number, password) VALUES('{$first_name}', '{$last_name}', '{$email}', {$contact_number}, '{$password}')";
					//mysqli_query($connection,$query);
				
				
			//mysqli_query($connection,$query);
				//header("Location:homepage.php");
			

			
			else{
				$error="Invalid Verification Code. Enter the code correctly or Try re-sending the code.";
				$_SESSION['alert']=$error;
				echo "<script> window.history.back(); </script>";
			}
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