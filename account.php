<?php 
include_once 'includes/connection.php';
require 'includes/User.php';
require 'includes/Client.php';
require 'includes/Admin.php';
require 'includes/Employee.php';
session_start();
$current_user = $_SESSION['current_user'];
$firstname = $current_user->get_firstname();
$lastname = $current_user->get_lastname();
$email= $current_user->get_email();
$contact_number= $current_user->get_contact_no();
$id= $current_user->get_id();
 ?>
 
<!DOCTYPE HTML>
<html>

	<head>
		<title>CodeLab Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://kit.fontawesome.com/d977be036d.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">CodeLab</a>
					<nav id="nav">
						<a href="index.html"><i class="fas fa-home"></i> Home</a>
						<a href="projects.html"><i class="fas fa-project-diagram"></i> Projects</a>
						<a href="contact.html"><i class="fas fa-address-card"></i> Contact Us</a>
						<a href="myaccount.php"><i class="fas fa-user-circle" style="font-size: 20px;"></i></a>
						<a href="logout.php"><i class="fas fa-sign-out-alt" style="font-size: 20px;"></i></a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<header>
						<h2><?php echo $firstname,$lastname; ?></h2>
					</header>
					<form method="post" action="updateprofile.php">
						<div class="field">
							<label for="email">ID</label>
							<input type="text" name="id" id="id" value="<?php echo $id ?>" readonly />
						</div>
						<div class="field half first">
							<label for="name">First Name</label>
							<input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>"/>
						</div>
						<div class="field half">
							<label for="email">Last Name</label>
							<input type="text" name="lastname" id="lastname" value="<?php echo $lastname ?>" />
						</div>
						<div class="field">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" value="<?php echo $email ?>" />
						</div>
						<div class="field">
							<label for="email">Password |Give Current or New Password</label>
							<input type="Password" name="password" id="password" value="" required="" />
						</div>
						<div class="field">
							<label for="email">Mobile Number</label>
							<input type="text" name="mobilenumber" id="mobilenumber" value="<?php echo $contact_number ?>" />
						</div>
						<ul class="actions">
							<li><input type="submit" value="Edit My Account" class="alt" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
