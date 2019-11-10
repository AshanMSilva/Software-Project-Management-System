<?php session_start();
if ( (!isset($_SESSION['logged_in'])) or $_SESSION['logged_in']==false): ?>
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
  
  <title>index</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/styles.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<?php $_SESSION['logged_in']=false; ?>
    <?php if (isset($_SESSION["alert"])): ?>
      <script type="text/javascript">
        alert("<?php echo ($_SESSION["alert"]); ?>");
      </script>
      <?php unset($_SESSION['alert']); ?>
    <?php endif; ?>
<body>
  <section class="carousel slide cid-rASKeBMenI" data-interval="false" id="slider1-6">

    

    <div class="full-screen">
      <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
          <li data-app-prevent-settings="" data-target="#slider1-6" class=" active" data-slide-to="0"></li>
          <li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="1"></li>
          <li data-app-prevent-settings="" data-target="#slider1-6" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1920x1278.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay">
                </div>
                <img src="assets/images/mbr-1920x1278.jpg" title="FULL SCREEN SLIDER">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">CODELAB</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.
                    </p>
                    <div class="mbr-section-btn" buttons="0">
                      <a class="btn btn-success display-4" id="login1">LOGIN</a>
                       <a class="btn  btn-white-outline display-4" id="signup1">SIGNUP</a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/1-970x450.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay">
                  
                </div>
                <img src="assets/images/1-970x450.jpg" title="FULL SCREEN SLIDER">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">CODELAB</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                    <div class="mbr-section-btn" buttons="0">
                      <a class="btn btn-success display-4" id="login2">LOGIN</a>
                      <a class="btn  btn-white-outline display-4" id="signup2">SIGNUP</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/2-910x411.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <div class="mbr-overlay">
                  
                </div>
                <img src="assets/images/2-910x411.jpg" title="FULL SCREEN SLIDER"><div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">CODELAB</h2>
                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                    <div class="mbr-section-btn" buttons="0">
                      <a class="btn btn-success display-4" id="login3">LOGIN</a> 
                      <a class="btn  btn-white-outline display-4" id="signup3">SIGNUP</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-6">
          <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-6">
          <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  <div class="form-popup" id="loginForm">
    <form action="loginprocess.php" class="form-container" method="post">
      <h1>Login</h1>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw1"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw1" required>

      <button type="submit" class="btn" name="submit">Login</button>
      <button type="button" class="btn cancel" id="logincancel">Close</button>
    </form>
  </div>
  <div class="form-popup" id="signupForm">
    <form action="signupprocess.php" class="form-container form-containersignup" method="post">
      <h1>Signup</h1>
      <div class="inline">
        <label for="firstname"><b>First Name</b></label><br>
        <input type="text" placeholder="Enter First Name" name="firstname" required>
      </div>
      <div class="inline inline2">
        <label for="lastname"><b>Last Name</b></label><br>
        <input type="text" placeholder="Enter Last Name" name="lastname" required><br>
      </div>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
      <div class="inline">
        <label for="contact_no"><b>Contact number</b></label><br>
        <input type="tel" placeholder="Enter contact number" name="contact_no" required>
      </div>
      <div class="inline inline2">
        <label for="acc_no"><b>Account number</b></label><br>
        <input type="number" placeholder="Enter Account number" name="acc_no" required>
      </div>
      <?php echo"Your Password should contain atleast a symbol, a digit and a block letter."."<br/>"."Should have 5 or more characters without whitespaces.";?>
      <div class="inline">
        <label for="psw"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="psw" required>
      </div>
      <div class="inline inline2">
        <label for="repsw"><b>Re-Password</b></label><br>
        <input type="password" placeholder="Re-Enter Password" name="repsw" required>
      </div>
      <button type="submit" class="btn" name="submit">Signup</button>
      <button type="button" class="btn cancel" id="signupcancel" >Close</button>
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
  <script src="assets/js/script.js"></script>
  <?php if (isset($_GET["alert"])): ?>
  <script type="text/javascript">
    alert("<?php echo htmlentities(urldecode($_GET["alert"])); ?>");
  </script>
<?php endif; ?>
  
</body>
</html>
<?php else: ?>
  <?php header("Location: home.php"); ?>
<?php endif; ?>