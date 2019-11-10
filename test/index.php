<?php
session_start();
if ($_SESSION['logged_in']==True){

    include 'header.php';
    //include 'search.php';
?>
<head>
    <link href = css/bootstrap.min.css" rel = "stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- File uploader plugin -->

    <script src="Resources/fileUploader/dropzone.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Resources/dist/css/jquery.dm-uploader.min.css" rel="stylesheet">
    <link href="Resoures/styles.css" rel="stylesheet">

</head>
<body style = "background-image: url(banner.jpg);background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #464646;">
 <form action= "search.php" method="POST" >
     <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark indigo mb-4">

        <!-- Navbar brand -->


        <!-- Collapsible content -->
        
        <!-- Collapsible content -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<div class='container'>
  <div class='content-wrapper'>
    <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-8 col-lg-8' style="width:200px;font-size:25px;color:white;">
        Search your result Here
      </div>
      <div class='col-xs-12 col-sm-12 col-md-4 col-lg-4'>

        <form class='navbar-form'>
          <div class='input-group'>
            <input class='form-control' type='text' name='search' placeholder='Search....' aria-label="Search" style="width:200px;"/>
            <span class="input-group-btn">
              <button  id = "submit" type='submit' class='btn btn-default' name="submit-search">
                <span class='glyphicon glyphicon-search'></span>
              </button>
            </span>

          </div>
        </form>

      </div>
    </div>
  </div>
</div>
        

    </form>

<div class = "article-container">
    <?php
       /* $sql = "SELECT * FROM project_link";
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result);
        if($queryResult>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "<div>";
                   echo "<h3>".$row['name']."</h3>";
                   echo "<p>".$row['link']."</p>";*/
                   /*echo "<p>".$row['a_date']."</p>";
                   echo "<p>".$row['a_author']."</p>";*/
                    
                /*echo "</div>";
            }
        }*/


    ?> 
    </div>  
</body><?php
}
else{
    header("Location:index.php");
}


?>
</html>
