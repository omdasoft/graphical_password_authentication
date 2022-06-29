<?php
      session_start();
?>
<!DOCTYPE html>
<html>
<head>

      <title>Register</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
    
      <link rel="stylesheet" href="css/style-footer.css">
	<link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
      
      <script>
      // passing the selected image reference to slice the image
      function changeIt(img)
      {
            var name = img.src;
            console.log(name);
            window.location.href = "reg_slice1.php?var="+name; 
      }      
      </script>

</head>

<body>
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
					  <li>
							<a href="../index.php">Home</a>
					  </li>
					  <li>
							<a href="../registration/signup.html">Sign Up</a>
					  </li>
					  <li class="active">
							<a href="../log_in/login.html">Login</a>
					  </li>
				</ul>
		  </div>
		  <!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>

<!-- signup form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<div class="left_grid_info">
					<h1>Manage Your User Account</h1>
					<p>This system provides high security to your account through the graphical password.</p><br>
					<img class="im1" src="../images/cover.jpg" height="270" width="370">
				</div>
			</div>
			<div class="login_info">
			      <h2>Upload 4 Images to Secure Your Account</h2>
                        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                              Select image to upload:
                              <input type="file" name="image[]" class="form-control" multiple required><br>
                              <input type="submit" value="Upload Images" name="submit" class="btn btn-primary">
                        </form>
                  <?php
                        error_reporting(0);
                       
                        if(isset($_POST['submit'])) {
                              $username = $_SESSION['a'][0];
                              $dir = '../images/pw/'.$username.'/';
                              mkdir($dir);
                              $countfiles = count($_FILES['image']['name']);
                              for($i=0;$i<$countfiles;$i++){
                                    $tmp = $_FILES['image']['tmp_name'][$i];
                                    $name= rand();
                                    $valid_types = array("image/jpg", "image/JPG", "image/jpeg", "image/bmp", "image/gif", "image/png");
                                    if(!in_array($_FILES['image']['type'][$i],$valid_types)){
                                          echo "only jpg,JPG,jpeg,bmp,gif and png extensions are alowed";
                                          exit;
                                    }
                                    move_uploaded_file($tmp, $dir.$name.'.jpg'); 
                              }
                              //echo $countfiles."images successfully uploaded";
                              header('Location:registration_img1.php');
                        }
                        ?>
                  </div>
		</div>
	</div>
</div>

<!-- footer -->
<footer class="footer-distributed">
	<p class="text-center" style="color: #fff;">all rights reserved GPAS&copy;2022</p>						
</footer>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>