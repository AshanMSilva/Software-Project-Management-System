<?php 
include_once 'includes/connection.php';
require 'includes/User.php';
require 'includes/Client.php';
require 'includes/Admin.php';
require 'includes/Employee.php';
require 'includes/System.php';
$system= new System();


session_start();
$current_user = $_SESSION['current_user'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobilenumber = $_POST['mobilenumber'];
$id = $_POST['id'];
$email_exit = $system->check_email_exit($email,$connection);
if(!$email_exit){
    $current_user->set_email($email,$id,$connection);
    $current_user->set_firstname($firstname,$id,$connection);
    $current_user->set_lastname($lastname,$id,$connection);
    $current_user->set_contact_no($mobilenumber,$id,$connection);
    $current_user->set_password($password,$id,$connection);
}
else{
    $current_user->set_firstname($firstname,$id,$connection);
    $current_user->set_lastname($lastname,$id,$connection);
    $current_user->set_contact_no($mobilenumber,$id,$connection);
    $current_user->set_password($password,$id,$connection);
}

echo "<script type='text/javascript'>alert('Details Updated!');
    window.location.href = 'account.php'</script>";
?>