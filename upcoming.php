<?php  
include_once 'includes/connection.php';

$sql = "SELECT project_id, title, pro_status, progress, category, keywords, link, due_date FROM project WHERE pro_status='new' ";
$result = $connection->query($sql);

$connection->close();
?>
<html>
	<head>
		<title>CodeLab Upcoming</title>
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
						<a href="upcoming.php"><i class="fas fa-project-diagram"></i>Upcoming Projects</a>
						<a href="staff.php"><i class="fas fa-users"></i>Staff</a>
						<a href="account.php"><i class="fas fa-user-circle" style="font-size: 20px;"></i></a>
						<a href="logout.php"><i class="fas fa-sign-out-alt" style="font-size: 20px;"></i></a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<section>
							<h3><i class="fas fa-file-code"></i> &nbsp Upcoming Projects</h3>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Id</th>
											<th>Title</th>
											<th>Status</th>
											<th>Progress</th>
											<th>Category</th>
											<th>Keywords</th>
											<th>Document</th>
											<th>GitHub</th>
											<th>Due-Date</th>
											<th>Confirmation</th>
											<th>Employees</th>
										</tr>
									</thead>
									<tbody>
										
											<?php
                					if ($result->num_rows > 0) {
            						// output data of each row
                   					 while($row = $result->fetch_assoc()) {
                       						 ?>
                       						<tr>
                            				<td><?php echo $row['project_id']?></td>
                            				<td><?php echo $row['title']?></td>
                            				<td><?php echo $row['pro_status']?></td>
                            				<td><?php echo $row['progress']?></td>
                            				<td><?php echo $row['category']?></td>
                            				<td><?php echo $row['keywords']?></td>
                            				<td><?php?></td>
                            				<td><?php echo $row['link']?></td>
                            				<td><?php echo $row['due_date']?></td>
                            				<td><a href="updatestatus.php?projectid=<?php echo $row['project_id'] ?>"  class="button special icon fa-check">Confirm</a></td>
                            				<td><a href="employeeproject.php?projectid=<?php echo $row['project_id'] ?>"  class="button special icon fa-plus">Add Employees</a></td>
                            			</tr>
                            
                        			<?php
                        
                    				}
                					}
           								 ?>
											
										
									</tbody>
								</table>
								
							</div>
						</section>


						