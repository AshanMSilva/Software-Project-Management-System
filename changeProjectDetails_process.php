<?php
session_start();
include_once 'includes/connection.php';
$project_id=$_SESSION["project_id"];
$title=$_POST['title'];

$due_date=$_POST['due_date'];
$category=$_POST['category'];
$keywords=$_POST['keywords'];
$start_date=date("Y-m-d");
if($due_date<$start_date){
    echo "Due date is not valid!";
}
else{
    
    // Check connection
    if($connection === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    // (name,client_name ,company, due_date) = ('$name','$client_name','$company_name','$due_date')
    else{
        $sql = "UPDATE project SET title='$title',due_date='$due_date',keywords='$keywords',category='$category',keywords='$keywords' WHERE project_ID=$project_id";
        if(mysqli_query($connection, $sql)){
            $_SESSION['alert']="Records changed successfully.";
                echo "<script> window.history.go(-2);
                    </script>";

        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }    
    } 

}


?>