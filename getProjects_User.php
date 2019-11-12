<?php
include_once 'includes/connection.php';
require 'includes/User.php';
require 'includes/Client.php';
require 'includes/Admin.php';
require 'includes/Employee.php';
require 'includes/System.php';

$current_user=$_SESSION['current_user'];

$user_id=$current_user->get_id();

$sql="SELECT project_id,title,progress, category,pro_status from project NATURAL JOIN owns where client_id=$user_id order by start_date";
$proResult = $connection->query($sql);
?>

<?php while($row = $proResult->fetch_assoc()): ?>
    <?php
    $project_id=$row["project_id"];
    echo $project_id;
    $title=$row["title"];
    $progress=$row["progress"];
    $category=$row["category"];
    $pro_status=$row["pro_status"];
    ?>
<div class="projectdetails">
    <h2> <?php echo $title;?><h2>   
    <h2> <?php echo $progress."%"; ?><h2> 
    <h2> <?php echo $category;?><h2>
    <h2> <?php echo $pro_status;?><h2>


    </div>
    <ul class="actions">
        <li><a href="projectDetailsUser2.php?project_id=<?php echo $project_id;?>" >View</a></li><br>
    </ul>

<?php endwhile;?>

                                                                                                               
<!-- 
You can add the variable in the link to the next page:

<a href="page2.php?varname=<?php //echo $var_value ?>">Page2</a> -->
