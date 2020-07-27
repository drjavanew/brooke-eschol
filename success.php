<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Brooke-Eshcol Systems - Successful</title>

    <!-- Favicon -->
      <link rel="icon" href="img/icon/logo2R.png">

    <!-- Core Stylesheet -->
    <link href="Login/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="Login/css/responsive/responsive.css" rel="stylesheet">


    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Login/css/util.css">
        <link rel="stylesheet" type="text/css" href="Login/css/main.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/formresponse.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- Search Form Area -->
    <div class="fancy-search-form d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Close Btn -->
                    <div class="search-close-btn" id="closeBtn">
                        <i class="ti-close" aria-hidden="true"></i>
                    </div>
                    <!-- Form -->
                    <form action="#" method="get">
                        <input type="search" name="fancySearch" id="search" placeholder="| Enter Your Search...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
<?php include('header.php') ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url(img/bg-img/hero-1.jpg);">
        
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <! Form-- Video Overview -->
                        <div class="video-overview">
							<div class="limiter">
								<div class="container-login100">
									<div class="wrap-login100">
										<form class="login100-form validate-form">
										<?php
										if ((isset($_GET['hash']) AND !empty($_GET['hash'])) 
											&& isset($_SESSION['hash']) AND !empty($_SESSION['hash'])) {
										?>
											<span class="login100-form-title p-b-26">
											<?php   
											
											if (isset($_SESSION['title']) AND !empty($_SESSION['title'])) { 
											echo $_SESSION['title'];
											}
											?>
												
                                            </span>
											<div class="success">
											<?php   if (isset($_SESSION['msg']) AND !empty($_SESSION['msg'])) { 
												echo $_SESSION['msg'];
												} 
											unset($_SESSION['msg']);
											unset($_SESSION['title']);
											unset($_SESSION['hash']);
												?>
												</div>
										<?php } else { 
					if ((isset($_SESSION['msg']) || !empty($_SESSION['msg'])) AND (isset($_SESSION['title']) || !empty($_SESSION['title']))) {
											//session_destroy();
											unset($_SESSION['msg']);
											unset($_SESSION['title']);
										  }
										?>
										<div class="error">
										Page Not Found!
										</div>
										<?php } ?>
								
								</form>
								</div> 
							   </div>  
							</div>
							
                           

							</div>
                            
                        <!----    <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video--play--btn"><i class="fa fa-play" aria-hidden="true"></i> Watch The Overview</a>  -->
                        </div>
                       <!---- <h2>Website Design, Software Development C#,C++,Java, Python Programmers</h2> -->
                 <!----       <a href="about.html" class="btn fancy-btn fancy-active">About Us</a> --->
                  <!----     <a href="Login_v2/docmed/index.html" class="btn fancy-btn">Register Training</a>  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

   <!--===============================================================================================-->
<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login/js/main.js"></script>





    <!-- jQuery-2.2.4 js -->
    <script src="Login/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="Login/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="Login/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="Login/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="Login/js/active.js"></script>
</body>