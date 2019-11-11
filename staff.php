<?php  
include_once 'includes/connection.php';

$sql = "SELECT employee_id, firstname, lastname,email, contact_no FROM employee ";
$result = $connection->query($sql);

$connection->close();
?>
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
						<a href="home_admin.php"><i class="fas fa-home"></i>Home</a>
						<a href="project_admin.php"><i class="fas fa-project-diagram"></i>Projects</a>
						<a href="upcoming_project_admin.php"><i class="fas fa-project-diagram"></i>Upcoming Projects</a>
						<a href="staff.php"><i class="fas fa-users"></i>Staff</a>
						<a href="account.php"><i class="fas fa-user-circle" style="font-size: 20px;"></i></a>
						<a href="logout.php"><i class="fas fa-sign-out-alt" style="font-size: 20px;"></i></a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<section>
							<h3><i class="fas fa-users"></i> Staff Members</h3>
							<h4> | Developers |</h4>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Id</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Email</th>
											<th>Contact Number</th>
										</tr>
									</thead>
									<tbody>
										
											<?php
                					if ($result->num_rows > 0) {
            						// output data of each row
                   					 while($row = $result->fetch_assoc()) {
                       						 ?>
                       						<tr>
                            				<td><?php echo $row['employee_id']?></td>
                            				<td><?php echo $row['firstname']?></td>
                            				<td><?php echo $row['lastname']?></td>
                            				<td><?php echo $row['email']?></td>
                            				<td><?php echo $row['contact_no']?></td>
                            			</tr>
                            
                        			<?php
                        
                    				}
                					}
           								 ?>
											
										
									</tbody>
								</table>
								<li><a href="addemployee.php" class="button special icon fa-user-plus">Add</a></li>
							</div>
						</section>


						