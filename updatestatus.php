<?php 
include_once 'includes/connection.php';
require 'includes/User.php';
require 'includes/Client.php';
require 'includes/Admin.php';
require 'includes/Employee.php';
session_start();
$project_id=$_GET['projectid'];
$query = "UPDATE project SET pro_status='Accepted' WHERE project_id='{$project_id}'";
if ($connection->query($query) === TRUE) {
    echo "<script type='text/javascript'>alert('You Accepted New Project!');
    window.location.href = 'upcoming.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('Opps! Error!');
    window.location.href = 'upcoming.php'</script>";
}
 ?>