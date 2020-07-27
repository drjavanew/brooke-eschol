<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Brooke-Eshcol Systems - About Us</title>

    <!-- Favicon -->
    <link rel="icon" href="img/icon/logo2R.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

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

    <!-- ***** Service Area Start ***** -->
    <section class="bg-img bg-overlay section-padding-100-70 bg-overlay animated-img" style="background-image: url(img/bg-img/classroom.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-white text-center">
						<h2>About Us</h2>
                        <p>Brooke-Eshcol Systems is an IT Solution provider. We undertake the training of world-class programmers and the development of industry-based software. Our service delivery is based on professional ethics. Our staff members are tested IT professionals. </p>
                       <!-- <p>Software Engineers</p>-->
                        <!--<p>Embedded System Programmers, Arduino</p>-->
                  
                    </div>
                </div>
            </div>
				
            </div>
        </div>
    </section>

	<!-- ***** Skills Area Start ***** -->
    <section class="fancy-skills-area section-padding-50-70">
        <!-- Side Thumb -->
        <div class="skills-side-thumb">
            <img src="img/bg-img/skills.png" alt="" style="width:900px;">
        </div>
        <!-- Skills Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 ml-auto">
                    <div class="section-heading">
                        <h2>We serve all industries!</h2>
                        <p>We stay on top of our industry by being experts in our services. We measure our success by the results we drive for our clients.</p>
                    </div>
                 
                    <a href="contact.php" class="btn fancy-btn fancy-dark">Be our Client</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2>Ready To Discuss Your Project?</h2>
                        <p>There are many ways to contact us. You may drop us a line, give us a call or send an email.</p>
                        <!--<a href="Login.php" class="btn fancy-btn">Work with us</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

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