<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Brooke-Eshcol - Log In</title>
    <!--===============================================================================================-->	
	  <link rel="icon" href="img/icon/logo2R.png">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="SignUp/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="SignUp/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="SignUp/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="SignUp/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="SignUp/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="SignUp/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="SignUp/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="SignUp/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="SignUp/css/util.css">
        <link rel="stylesheet" type="text/css" href="SignUp/css/main.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/formresponse.css">
	  <!-- Favicon -->
    <link rel="icon" href="img/icon/logo2R.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>
<body style="background-color:#4e5160">
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
    <div class="fancy-hero-area bg-img bg-overlay" style="background-image: url(img/bg-img/classroom.jpg);">
        
        <div class="container">
            <div class="row h-20 align-items-center">
                <div class="col-12">
                    <div class="fancy-blog-area section-padding-100-70">
                     
                        <div class="video-overview">
							<div class="limiter">
								<div class="container-login100">
									<div class="wrap-login100">
										<form class="login100-form validate-form" method="post" action="login.php">
										<?php include('errors.php'); ?>
										
											<span class="login100-form-title p-b-20">

												LOGIN
                                            </span>

											<div id="l100" class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.com">
												<input class="input100" type="text" name="email" value="<?php if (isset($email)) {echo $email;} ?>" placeholder="Email" required>
												<span class="btn-show-pass">
                                            <i class="zmdi zmdi-email" disabled></i>
												</span>
												<span class="focus-input100"></span>
											</div>
						
											<div id="l100" class="wrap-input100 validate-input" data-validate="Password">
												<input class="input100" type="password" name="pwd" placeholder="Password" required>
												<span class="btn-show-pass">
                                            <i class="zmdi zmdi-eye"></i>
                                        </span>
											
											</div>
						
											<div id="l100" class="container-login100-form-btn">
												<div class="wrap-login100-form-btn">
													<div  class="login100-form-bgbtn"></div>
													<button type="submit" class="login100-form-btn" name="login_user">
														Login
                                                    </button>
                                                </div>
                                                <div class="text-center p-t-115">
                                                    <span class="txt1">
                                                        Don’t have an account?
                                                    </span>
                                                    <a class="txt2" href="signup.php">
                                                        Sign Up
                                                    </a>
                                                </div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
                           

							</div>
                            
                  
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Hero Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>