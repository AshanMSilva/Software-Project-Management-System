<?php
session_start();
$user_id=$_SESSION['user_id'];
include_once 'includes/connection.php';
$client_id=$user_id;  
$due_date=$_POST['due_date'];
$category=$_POST['category'];
$start_date=date("Y-m-d");
$keywords=$_POST['keywords'];
$title=$_POST['title'];
$progress=0;
if($due_date<$start_date){
    echo "Due date is not valid!";
}
else{ 
    // Check connection
    if($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    else{
        $sql = "INSERT INTO project  (title,due_date,category,keywords,progress) values ('$title','$due_date','$category','$keywords',0) ";
        if(mysqli_query($connection, $sql)){
             $sql2 = "INSERT INTO owns  (client_id,project_id,start_date) values ('$client_id',last_insert_id(),'$start_date')";
            if(mysqli_query($connection, $sql2)){
                $_SESSION['alert']='Project added successfully!';
                echo "<script> window.history.go(-4);
                    </script>";
            }
        
        } 
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    } 
}
?>

<!-- 
You can add the variable in the link to the next page:

<a href="page2.php?varname=<?php //echo $var_value ?>">Page2</a> -->