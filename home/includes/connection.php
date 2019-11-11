<?php
require ('includes/ConnectDb.php');
	$connect = ConnectDb::getInstance();
	$connection = $connect->getConnection();
	// $connection = mysqli_connect("localhost","root","","Lazarus");
	// if(mysqli_connect_errno()){
	// 	die("Connection Unsuccessful"." ".mysqli_connect_error());
		
	// }
	/*else{
		echo "Connection Successful.";
	}
	*/
?>
<?php/*
	$connection = mysqli_connect("localhost","root","","Lazarus");
	if(mysqli_connect_errno()){
		die("Connection Unsuccessful"." ".mysqli_connect_error());
		
	}
	/*else{
		echo "Connection Successful.";
	}
	*/

?>