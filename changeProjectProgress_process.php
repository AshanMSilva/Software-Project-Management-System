<?php
session_start();
$project_id=$_SESSION["project_id"];
$progress=$_POST['progress'];

$link = mysqli_connect("localhost", "root", "", "spms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// (name,client_name ,company, due_date) = ('$name','$client_name','$company_name','$due_date')
else{
    $sql = "UPDATE project SET progress='$progress' WHERE project_ID=$project_id";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }    
} 




?>