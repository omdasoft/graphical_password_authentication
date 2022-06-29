<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Graphical Password Authentication System</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="footer, address, phone, icons" />
  
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link href="css/style1.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>

<body>

  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Graphical Password Authentication System</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="#">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                <h1><font color="black" size="16">GPAS</font></h1>       
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Email</strong>
                              <br>
                              <a href="#">
                                    <span>info@gpas.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (9471) - 123 - 4567</span>
                        </li>
                  </ul>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.php">Home</a>
                        </li>
                        <?php if(isset($_SESSION['uname'])){ ?>
                        <li class="nav navbar-nav">
                              <a href="user/user_profile.php">Profile</a>
                        </li>
                        <?php } else { ?>
                        <li>
                              <a href="registration/signup.html">Sign Up</a>
                        </li>
                        <li>
                              <a href="log_in/login.html">Login</a>
                        </li> 
                        <?php } ?>                                               
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->
<!-- Our Story -->
<section class="story">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                <img src="images/about/story.png" class="responsive" alt="story">
                </div>
            <div class="col-md-6">
                <div class="story-content">
                    <h2>About GPAS</h2>
                    <h5 class="tagline">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, minima."</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus totam ducimus est vero, officiis, placeat optio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias aliquam nesciunt fugit optio illum aut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque assumenda, est quam perferendis expedita autem?</p>
                    <h6>Mission</h6>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam nihil dolorum beatae consequatur mollitia iure?</p>
                    <h6>Vision</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda consectetur adipisci, voluptatum dolores nostrum omnis.</p>
            </div>
        </div>
    </div>
              </div>
</section>

<!-- footer -->
    <footer class="footer-distributed">
	<p class="text-center" style="color: #fff;">all rights reserved GPAS&copy;2022</p>						
    </footer>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>

