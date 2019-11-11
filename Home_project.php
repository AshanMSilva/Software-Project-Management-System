<?php session_start();
if ($_SESSION['logged_in']==true){?>
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
                    <div class="mbr-section-btn" buttons="0">
                      <a class="btn btn-success display-4" id="createProject">New Project</a>
                        <?php include "getProjects_User.php;"?>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>

      </div>
    </div>

  <div class="form-popup" id="projectName">
        <form action="createProject_getDetailsNew.php" class="form-container" method="post">

            <label for="name"><b><h1>Project Name</h1></b></label>
            <input type="text" placeholder="Enter Name" name="name" required>


            <button type="submit" class="btn">Create</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
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
<?php 
}
else{
  header("Location: index.php");
 } ?>
