<?php 
require 
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
						<h2>My Account</h2>
					</header>
					<form method="post" action="#">
						<div class="field half first">
							<label for="name">First Name</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email">Last Name</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="email">Password</label>
							<input type="Password" name="email" id="email" />
						</div>
						<div class="field">
							<label for="email">Mobile Number</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="email">Account Number</label>
							<input type="text" name="email" id="email" />
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
