<?php  
include_once 'includes/connection.php';
session_start();
$employee_id=$_GET['employee_id'];
$project_id=$_SESSION['project_id'];
echo "$project_id";
echo "$employee_id";
$query1="INSERT into developer(developer_id) values ('$employee_id')";
$connection->query($query1);
$query = "INSERT INTO develops(developer_id, project_id) VALUES ('$employee_id','$project_id')";
if ($connection->query($query) === TRUE) {
    echo "<script type='text/javascript'>alert('Successfully Added!');
    window.location.href = 'upcoming.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('You have selected that employee before!');
    window.location.href = 'upcoming.php'</script>";
}
$connection->close();
?>
