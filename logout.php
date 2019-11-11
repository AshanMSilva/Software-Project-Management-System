<?php 
require('includes/System.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log out</title>
</head>
<body>
	<?php
			session_start();
			$system=new System();
			$system->Logout();
			//session_unset();
			//session_destroy();
			header("Location: index.php");
	?>

</body>
</html>