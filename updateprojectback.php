<?php 
include_once 'includes/connection.php';
require 'includes/User.php';
require 'includes/Client.php';
require 'includes/Admin.php';
require 'includes/Employee.php';
$project_id2=$_POST['id'];
$title=$_POST['title'];
$pro_status=$_POST['status'];
$progress=$_POST['progress'];
$category=$_POST['category'];
$keywords=$_POST['keywords'];
$documents=$_POST['documents'];
$location=$_POST['location'];
$due_date=$_POST['due_date'];
$sql = "UPDATE `project` SET `title` = '$title', `pro_status` = '$pro_status', `progress` = '$progress', `category` = '$category', `keywords` = '$keywords', `documents` = '$documents', `location` = '$location', `due_date` = '$due_date' WHERE project_id ='$project_id2'";
if ($connection->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Updated!');
    window.location.href = 'project_admin.php'</script>";
}
echo "<script type='text/javascript'>alert('Successfully updated!');
    window.location.href = 'project_admin.php'</script>";
session_start();
//$current_user = $_SESSION['current_user'];
//$id= $current_user->get_id();
 ?>