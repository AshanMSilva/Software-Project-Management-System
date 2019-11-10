<?php
//require('includes/Observer_Observable.php'); ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
class System implements Observer{

	public function __construct(){
	}

	public function Login($email,$pssword,$connection){
		$email = $email;
		$pssword = $pssword;
		$queryclient = "SELECT client_id, firstname, lastname, email, contact_no, pssword FROM client where email = '{$email}'" ;
		$resultclient = mysqli_query($connection, $queryclient);
		$valid_email = false;
		$valid_pwd = false;
		//while($recordclient = mysqli_fetch_assoc($resultclient)){
		if(mysqli_num_rows($resultclient)==1){
			$valid_email = true;

			$recordclient = mysqli_fetch_assoc($resultclient);
			//if($['email'] == $email){
				if($recordclient['pssword']==sha1($pssword)){					
					$valid_pwd = true;
					$client_id = $recordclient['client_id'];
					$email = $recordclient['email'];
					$firstname = $recordclient['firstname'];
					$lastname = $recordclient['lastname'];
					$contact_no = $recordclient['contact_no'];
					$current_user = new Client($firstname, $lastname, $email, $contact_no);
					$current_user->set_id($client_id);
					//break;
				}
			//}
		}
		else{
			$queryemployee = "SELECT employee_id, firstname, lastname, email, contact_no, pssword FROM employee where email = '{$email}'";
			$resultemployee = mysqli_query($connection,$queryemployee);
			//while($recordemployee = mysqli_fetch_assoc($resultemployee) && $notlogged){
			if(mysqli_num_rows($resultemployee)==1){
				$valid_email = true;
				$recordemployee = mysqli_fetch_assoc($resultemployee);
				//if($recordemployee['email'] == $email){
				if($recordemployee['pssword']==sha1($pssword)){
					$valid_pwd = true;
					$employee_id = $recordemployee['employee_id'];
					$firstname = $recordemployee['firstname'];
					$lastname = $recordemployee['lastname'];
					$contact_no = $recordemployee['contact_no'];
					$email = $recordemployee['email'];
					$current_user = new Employee($firstname, $lastname, $email, $contact_no);
					$current_user->set_id($employee_id);
					//break;
				}
			}
			else{
				$queryadmin = "SELECT admin_id, firstname, lastname, email, contact_no, pssword FROM admin where email = '{$email}'";
				$resultadmin = mysqli_query($connection,$queryadmin);
				//while($recordemployee = mysqli_fetch_assoc($resultemployee) && $notlogged){
				if(mysqli_num_rows($resultadmin)==1){
					$valid_email = true;
					$recordadmin = mysqli_fetch_assoc($resultadmin);
					//if($recordemployee['email'] == $email){
					if($recordadmin['pssword']==sha1($pssword)){
						$valid_pwd = true;
						$admin_id = $recordadmin['admin_id'];
						$firstname = $recordadmin['firstname'];
						$lastname = $recordadmin['lastname'];
						$contact_no = $recordadmin['contact_no'];
						$email = $recordadmin['email'];
						$current_user = new Admin($firstname, $lastname, $email, $contact_no);
						$current_user->set_id($admin_id);
						//break;
					}
				}
			}
			/*else{
				$valid_email = false;
				//header("Location:login.php?alert=".urlencode("Invalid e-mail address"));
			}*/
			//}
		}
		//$_SESSION['password'] = sha1($password);
		$_SESSION['current_user'] = $current_user;
		if(!$valid_email){
			$_SESSION['alert']="Invalid e-mail address";
			//echo "<script> window.history.back(); </script>";
			header("Location:index.php");
			//header("Location:homepage.php?alert=".urlencode("Invalid e-mail address"));
		}		
		elseif(!$valid_pwd){
			$_SESSION['alert']="Invalid password";
			header("Location:index.php");
			//header("Location:homepage.php?alert=".urlencode("Invalid password"));
		}
		else{
			if (isset($_SESSION['current_user'])){
				$_SESSION['logged_in'] = True;
			}
			//echo "<script> window.history.back(); </script>";
			if(get_class($current_user)=="Client"){
				header("Location:home.php");
			}
			elseif(get_class($current_user)=="Employee"){
				header("Location:home_employee.php");
			}
			elseif(get_class($current_user)=="Admin"){
				header("Location:home_admin.php");
			}
			
		} 
		}
	public function Signup($firstname,$lastname,$email,$contact_no,$pssword,$acc_no,$psw,$repsw,$connection){
		
		$pattern = '/^(?=.*[!@#$%^&*+=\/><.,:;])(?=.*[0-9])(?=.*[A-Z]).{5,}$/';

		$queryclient = "SELECT email FROM client WHERE email = '{$email}'";
		$resultclient = mysqli_query($connection, $queryclient);

		$queryemployee = "SELECT email FROM employee where email = '{$email}'";
		$resultemployee = mysqli_query($connection,$queryemployee);

		$queryadmin = "SELECT email FROM admin where email = '{$email}'";
		$resultadmin = mysqli_query($connection,$queryadmin);
			//while($recordemployee = mysqli_fetch_assoc($resultemployee) && $notlogged){
		if(mysqli_num_rows($resultclient)==0 && mysqli_num_rows($resultemployee)==0 && mysqli_num_rows($resultadmin)==0){

			if ($psw==$repsw && !preg_match('/\s/',$psw)){
				if (preg_match($pattern, $psw)){
					/*$query = "INSERT INTO client (first_name, last_name, email, contact_number, password) VALUES('{$first_name}', '{$last_name}', '{$email}', {$contact_number}, '{$password}')";
		
					mysqli_query($connection,$query);*/
					$current_user = new Client($firstname, $lastname, $email, $contact_no);
					$current_user->set_acc_no($acc_no);
					$_SESSION['current_user'] = $current_user;
					$_SESSION['pssword'] = $pssword;
					header("Location:emailverification.php");
					// Method to go to next page - email verification page
				}
				else{
					$error = "Your Password should contain atleast a symbol, a digit and a block letter. Should have 5 or more characters without whitespaces.";			
					$_SESSION['alert']=$error; 
					echo "<script> window.history.back(); </script>";
					//header("Location:newclient.php");
					//header("Location:newclient.php?alert=".urlencode($error));
				}
			}
			else{
				$error ="Please input the same password in both places.";
				$_SESSION['alert']=$error;
				echo "<script> window.history.back(); </script>";
				//header("Location:newclient.php");
				//header("Location:newclient.php?alert=".urlencode($error));
			}
			/*if($password==$repassword){
				$query = "INSERT INTO employee (first_name, last_name, email, contact_number, password) VALUES('{$first_name}', '{$last_name}', '{$email}', {$contact_number}, '{$password}')";
		
			mysqli_query($connection,$query);
		
			header("Location:homepage.php?first_name={$first_name}&last_name={$last_name}");
			}
			else{
				header("Location:newemployee.php");
			}*/
		}
		else{
			$error ="There's an account created with this email address. Use a different email or login with your existing account.";
			$_SESSION['alert']=$error;
			echo "<script> window.history.back(); </script>";
			//header("Location:newclient.php");
			//header("Location:newclient.php?alert=".urlencode($error));
		}
	}
	public function Verify_Password($password){
		$pattern = '/^(?=.*[!@#$%^&*+=\/><.,:;])(?=.*[0-9])(?=.*[A-Z]).{5,}$/';
		if (preg_match($pattern, $password)){
			echo "Valid Password";
			//Method to go to next page
		}
		else{
			echo "Your password contains unguarenteed characters";
		}
	}
	public function	notify_user($user, $msg){
		$user->receive_notification($msg);
	}
	public function Search($conn,$post ){
            $search = mysqli_real_escape_string($conn,$post);
            $sql = "SELECT * FROM project_link WHERE name LIKE '%$search%' ";
            $result = mysqli_query($conn,$sql);
            $quaryResult = mysqli_num_rows($result);
            
            echo '<h2 class="form-title" style="text-align:center;">'.'Your search result for '.$search.'</h2>';
            if($quaryResult>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<ul class="navbar-nav mr-auto">';
                    echo '<li class="nav-item" style="text-align:center;">';
                        echo "<a class='nav-link active' href='".$row['link']."'>".$row['link']."</a>";
                    echo '</li>';
                    echo '</ul>';
                
                
                }
            }else{
                echo "there is no result matching your result";
            }


	}

	public function Addlinks($text,$Price){
    	if ( $text!=NUll  and $Price!=Null ){
			
        	$sql = "INSERT INTO project_link( name,link) VALUES ('$Price','$text');";
        	mysqli_query($db,$sql);
    	}
    
	}

}
?>
</body>
</html>