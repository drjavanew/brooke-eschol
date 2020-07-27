<?php 
  session_start(); 
  // Check for URL of current page. 
		  
		//if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') 
		//{
			
		//header('location: https://brooke-eshcol.com.ng'); 
		//}
		
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Brooke-Eshcol Systems</title>

    <!-- Favicon -->
    <link rel="icon" href="img/icon/logo2R.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
	<style>
	.blog-img {
		height:180px;
		width:350px;
	
	</style> 

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
    <div class="fancy-hero-area bg-img bg-overlay" style="background-image: url(img/bg-img/classroom.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <!-- Video Overview -->
                        <div class="video-overview">
                            <!-- <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video--play--btn"><i class="fa fa-play" aria-hidden="true"></i> Watch The Overview</a> -->
                        </div>
                        <h2>Website Design, Software Development, C#, C++, Java, Python, etc</h2>
                        <a href="about.php" class="btn fancy-btn fancy-active">About Us</a>
                        <a href="signup.php" class="btn fancy-btn">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h5>
                                    <p>IT Experts, Expert Software Programmers </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h5>
                                    <p>Years of Practice and Trainings </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h5>
                                    <p>Well furnished computer Lab with seasoned Instructors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->
	
    <!-- ***** Blog Area Start ***** -->
		<div class="section-padding-100-70">&nbsp
	</div>
    <section class="fancy-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Training Programs</h2>
                        <p>We Are A Guide to your dream as a Programmer.
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img class="blog-img" src="img/bg-img/1.jpg" alt="">
                        <div class="blog-content">
                            <h5>Microsoft Office Suite</h5>
                            <!-- <p>Microsoft Official programming Language , also used for windows 10 Development.</p> -->
                            <!-- <a href="Login.php">Learn More</a>-->
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img class="blog-img" src="img/bg-img/7.jpg" alt="">
                        <div class="blog-content">
                            <h5>Python and Django</h5>
                            
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img class="blog-img" src="img/bg-img/3.png" alt="">
                        <div class="blog-content">
                            <h5>PHP & MySql</h5>
                            
                        </div>
                    </div>
                </div>
                                  <!--Nice-->
                                <!-- Single Blog -->
                                <div class="col-12 col-md-4">
                                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                                        <img class="blog-img" src="img/bg-img/10.jpg" alt="">
                                        <div class="blog-content">
                                            <h5>C, C++ & C#</h5>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                                        <img class="blog-img" src="img/bg-img/12.png" alt="">
                                        <div class="blog-content">
                                            <h5>Responsive Web Design</h5>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                                        <img class="blog-img" src="img/bg-img/15.png" alt="">
                                        <div class="blog-content">
                                            <h5>Database - SQL, Oracle, etc.</h5>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                                        <img class="blog-img" src="img/bg-img/14.png" alt="">
                                        <div class="blog-content">
                                            <h5>Java Programming</h5>
                                        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                                        <img class="blog-img" src="img/bg-img/16.jpg" alt="">
                                        <div class="blog-content">
                                            <h5>Android Development</h5>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                                        <img class="blog-img" src="img/bg-img/gis.jpg" alt="">
                                        <div class="blog-content">
                                            <h5>GIS and Remote Sensing</h5>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                                        <img class="blog-img" src="img/bg-img/17.jpg" alt="">
                                        <div class="blog-content">
                                            <h5>Others</h5>
                                            
                                        </div>
                                    </div>
                                </div>

                                

                              

                               

            </div>
        </div>
    </section>
	
    <!-- ***** Blog Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" style="text-align:center">
                    <div class="about-us-text">
                        <h2>We Have the Right Tool to Guide you in Your Programming Career </h2>
                        <p>Software Engineers</p>
                        <p>Embedded System Programmers, Arduino</p>
                        <!--<a href="#" class="btn fancy-btn fancy-dark">Read More</a>-->
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/bg-img/tools.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->


    <!-- ***** Footer Area Start ***** -->
    <?php include('footer.php') ?>
    <!-- ***** Footer Area End ***** -->

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
</html>