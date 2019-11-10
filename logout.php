<!DOCTYPE html>
<html>
<head>
	<title>Log out</title>
</head>
<body>
	<?php
			session_start();
			$_SESSION['logged_in']=false;
			unset($_SESSION['current_user']);
			//session_unset();
			//session_destroy();
			header("Location: index.php");
	?>

</body>
</html>