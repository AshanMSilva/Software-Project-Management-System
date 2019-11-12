<?php session_start();
if ($_SESSION['logged_in']==true): ?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.11.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!--<link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">-->
  <meta name="description" content="">
  
  <title>Projects</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/styles.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} */
</style>
  
</head>
<body>
  <section class="carousel slide cid-rASKeBMenI" data-interval="false" id="slider1-6">
    <div class="full-screen">
      <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1920x1278.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay">
                </div>
                <img src="assets/images/mbr-1920x1278.jpg" title="FULL SCREEN SLIDER">
                <div class="carousel-caption justify-content-center">

                  <div class="col-10 align-center">
                  <form action="createProject_process.php" method="post">
                          <label for="title" ><b><h3>Title</h3></b></label>
                        <input type="text" placeholder="Title" name="title" required>

                        <br><br>

                        <label for="category" ><b><h3>Category</h3></b></label>
                        <input type="text" placeholder="Category" name="category" required>
                        <br><br>

                        <label for="keywords"><b><h3>Key Words</h3></b></label>
                        <input type="text" placeholder="Project Discription" name="keywords" required>
                        <br><br>
                        
                        <label for="date"><b><h3>Due Date</h3></b></label><br>
                        <input type="date"  name="due_date" required>
                        <br><br>

                        <button class="btn btn-success display-4" type="submit" class="btn">Done</button>
                        
                        <button class="btn btn-success display-4" type="button" onclick="window.location.href='home_project.php'" class="btn cancel" >Cancel</button>
                </form> 
                </div>
                 </div>
               </div>
             </div>
           </div>

      </div>
    </div>



</section>



  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/js/script_newproject.js"></script>
  <?php if (isset($_GET["alert"])): ?>
  <script type="text/javascript">
    alert("<?php echo htmlentities(urldecode($_GET["alert"])); ?>");
  </script>
<?php endif; ?>
  
</body>
</html>
<?php else: ?>
  <?php header("Location: inedex.php"); ?>
<?php endif; ?>