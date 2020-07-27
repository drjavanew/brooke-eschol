<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Brooke-Eshcol Systems - Services</title>

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

    <!-- ***** Contact Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay section-padding-100-70 h-100" style="background-image: url(img/bg-img/classroom.jpg);"> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                                        <!-- Contact Form -->
                    <div class="contact-form-area">
                        <div class="section-heading">
                            <h2 style="color:white">Get In Touch With Us!</h2>
                        </div>
                        <div class="contact-form">
                            <form action="#" method="post">
                                <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                                    <!-- Single Input Area -->
                                    <div class="col-12">
                                        <div class="form-group">
                                             <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                        <!-- Single Input Area -->
                                    <div class="col-12">
                                         <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                                            <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                        <input type="text" class="form-control" name="address" id="website" placeholder="Address" required>
                                            </div>
                                        </div>
                                                            <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Messages" required></textarea>
                                            </div>
                                        </div>
                                                            <!-- Single Input Area -->
                                        <div class="col-12">
                                            <button type="submit" class="btn fancy-btn fancy-white bg-transparent">Send Message</button>
                                        </div>
                                </div>
                            </div>
                            </form>
                         </div>
                    </div>
                                    
				</div>
            </div>
        </div>
                        
	</div>
                        <!-- ***** Contact Area End ***** -->
					
					<!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6" style="text-align:center">
                    <div class="about-us-text">
                         <div class="contact-details-area">
                        <div class="section-heading">
                            <h2>Contact Us</h2>
                            <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                        </div>
                        <p>+ (234) 7054999071<br>contact@brooke-eshcol.com.ng
                        </p>
                        <p>Uniport Mall Abuja park <br> Uniport, River State,  Nigeria</p>
                        <p>Work hours: 8.00am - 05.00pm Monday - Saturday </p>
                    </div>
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