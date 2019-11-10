<?php
include_once('includes/connection.php');
require('includes/User.php');
require('includes/Client.php');
require('includes/Admin.php');
require('includes/Employee.php');
require('includes/System.php');
session_start();
$system =new System();
if ($_SESSION['logged_in']==True){




?>
<!DOCTYPE html>
<html>
<head>
    <title>Link Upload</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
<script src="Resources/jquery/jquery-3.3.1.min.js"></script>
    <link rel="shortcut icon" href="Resources/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- File uploader plugin -->

    <script src="Resources/fileUploader/dropzone.js"></script>



    <link href="Resources/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="Resoures/styles.css" rel="stylesheet">
</head>
<body style = "background-image: url(banner.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #464646;">
<nav class="navbar navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand">
    <img classs="img-responsive" width="" height="75px"  src="Screenshot(6).jpg" >
    </a>
</nav>
<div class = "artical-container">
    <?php
        if(isset($_POST['submit-search'])){
            $post = $_POST['search'];
            $system->Search($connection,$post);
           /* $search = mysqli_real_escape_string($conn,$_POST['search']);
            $sql = "SELECT * FROM project_link WHERE name LIKE '%$search%' ";
            $result = mysqli_query($conn,$sql);
            $quaryResult = mysqli_num_rows($result);
            
            echo '<h2 class="form-title" style="text-align:center;">'.'Your search result for '.$search.'</h2>';
            if($quaryResult>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo '<ul class="navbar-nav mr-auto">';
                    echo '<li class="nav-item" style="text-align:center;">';
                        echo "<a class='nav-link active' href='".$row['link']."'>".$row['link']."</a>";
                    echo '</li>';
                    echo '</ul>';
                
                
                }
            }else{
                echo "there is no result matching your result";
            }*/


        }

        ?>
</div>
</body>
<?php
    }
    else{
        header("Location:index.php");
    }
?>
