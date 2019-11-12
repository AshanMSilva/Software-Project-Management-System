<?php 
session_start();
include_once 'includes/connection.php';
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$mobilenumber=$_POST["mobilenumber"];
$password=sha1($_POST["password"]);
$confirmpassword=sha1($_POST["confirmpassword"]);

$sql = "INSERT INTO employee (firstname, lastname, email,contact_no,pssword)
VALUES ('$firstname', '$lastname', '$email',$mobilenumber,'$password')";
if ($password=$confirmpassword){
if ($connection->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('New Developer Added Successfully!');
    window.location.href = 'staff.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}}
else{
	echo "<script type='text/javascript'>alert('Password Doesnt Match!');
    window.location.href = 'addemployee.php'</script>";
}
$connection->close();
?> 

