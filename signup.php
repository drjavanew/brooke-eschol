<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Brooke-Eshcol Systems - Sign Up</title>
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
    <link rel="icon" href="img/core-img/logo2R.png">

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
        <div class="container h-300">
		
            <div class="row h-300 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <div class="video-overview">
                            <div class="limiter">
                                      <!-- ***** Sign Up area start  ***** -->
    <section class="fancy-blog-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12"> 
                </div>
            </div>
			<form id="signform" class="login100-form validate-form" method="POST" action="signup.php" onsubmit="return(validateForm());">
			<?php include('errors.php'); ?>
            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-6">
				<div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                
                                    <span class="login100-form-title p-b-26">
                                        Sign Up
                                    </span>
                
                                    <div class="wrap-input100 validate-input" data-validate = "Valid Full Name">  
                                        <input form="signform" class="input100" type="text" name="firstname" value="<?php if (isset($firstname)) {echo $firstname;} ?>" id='firstname' onclick="style.backgroundColor= '#fff'" autofocus>
                                        <span class="focus-input100">First Name</span> 
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Valid UserName">  
                                        <input form="signform" class="input100" type="text" name="lastname" value="<?php if (isset($lastname)) {echo $lastname; }?>" id='lastname' onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Last Name</span> 
                                    </div>
                                   
                                    <div class="wrap-input100 validate-input" data-validate = "Enter Level of Education obtained">
                                        <select form="signform" name="education" id='education' onclick="style.backgroundColor= '#fff'">
                                            <option value="">Level of Education</option>
                                            <option value="Pre-Degree">Pre-Degree</option>
                                            <option value="Undergraduate">Undergraduate</option>
                                            <option value="Post-Graduate">Post-Graduate</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        
                                    </div>
                                    
                
                                    <div class="wrap-input100 validate-input" data-validate="password">
                                        <span class="btn-show-pass">
                                            <i class="zmdi zmdi-eye"></i>
                                        </span>
                                        <input form="signform" class="input100" type="password" name="pwd" id='pwd' onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Enter Password</span>
                                    </div>
                                    
                                    <div class="wrap-input100 validate-input" data-validate="Confirm Password">
                                        <span class="btn-show-pass">
                                            <i class="zmdi zmdi-eye"></i>
                                        </span>
                                        <input form="signform" class="input100" type="password" name="pwd2" id='pwd2' onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Confirm Password</span>
                                    </div>
                
                                    
                                

                            </div>
                        </div>
                    </div>
                    
				</div>
                
                <div class="col-12 col-md-6">
                    
					
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                
                                    <span class="login100-form-title p-b-26">
                                        &nbsp;</br>
										&nbsp;
                                    </span>

                                    <div class="wrap-input100 validate-input" data-validate = "Phone number">
                                        <input form="signform" id='phoneno' class="input100" type="phone" name="phoneno" required value="<?php if (isset($phoneno)) {echo $phoneno; }?>" onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Enter Phone Number</span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Gender">
                                        <select form="signform" id='gender' name="gender" required onclick="style.backgroundColor= '#fff'">
                                            <option value=""> Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate = "Address">
                                        <input form="signform" id='address' class="input100" required type="textarea" name="address" value="<?php if (isset($address)) {echo $address;} ?>" onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Enter House address</span>
                                    </div>


                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.com">
                                        <input form="signform" id='email' class="input100" required type="text" name="email" value="<?php if (isset($email)) {echo $email;} ?>" onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Email address</span>
                                    </div>

                                   <!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.com">
                                        <input form="signform" id='email2' class="input100" required type="text" name="email2" required onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Confirm Email address</span>
                                    </div> -->

                                    <div class="wrap-input100 validate-input" data-validate = "Date" style="text-align: left;">
                                        <input form="signform" id='date' class="input100" required type="date" name="date" value="<?php if (isset($date)) {echo $date; }?>" style="text-align: center;" required onclick="style.backgroundColor= '#fff'">
                                        <span class="focus-input100">Date</span>
                                    </div>
                <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <button form="signform" type="submit" name="reg_user" class="login100-form-btn" onclick="validateForm()">
                                                Sign Up
                                            </button>
                                        </div>
                                    </div>
                                   
                                
                            </div>
                        </div>
                        
                    </div>
                
					
                
                    <div id="dropDownSelect1"></div>
                    </div>
                </div>
				</form>
                             

            </div>
        </div>
    </section>
    <!-- ***** Sign Up Form Area End ***** -->

                                

                            
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
	<script>
	function validateForm() {
		//getting fields value
	var first = document.getElementById('firstname').value;
	var last = document.getElementById('lastname').value;
	var edu = document.getElementById('education').value;
	var pd = document.getElementById('pwd').value;
	var pd2 = document.getElementById('pwd2').value;
	var ph = document.getElementById('phoneno').value;
	var gen = document.getElementById('gender').value;
	var add = document.getElementById('address').value;
	var em1 = document.getElementById('email').value;
	var em2 = document.getElementById('email2').value;
	var dat = document.getElementById('date').value;
	// validating phone number
	 var phone = /^\d{11}$/;
  
	if(first.length == 0){
		document.getElementById('firstname').style.backgroundColor= "#cc0033";
		alert("First Name is empty");
		//document.getElementById('firstname').focus();
		return false;
	} else if(last.length == 0){
		document.getElementById('lastname').style.backgroundColor= "#cc0033";
		alert("Last Name is empty");
		//document.getElementById('lastname').focus();
		return false;
	} else if(edu.length == 0){
		document.getElementById('education').style.backgroundColor= "#cc0033";
		alert("Select Level of Education");
		//document.getElementById('education').focus();
		return false;
	} else if(pd.length == 0){
		document.getElementById('pwd').style.backgroundColor= "#cc0033";
		alert("Password is empty");
		//document.getElementById('pwd').focus();
		return false;
	} else if(pd2.length == 0){
		document.getElementById('pwd2').style.backgroundColor= "#cc0033";
		alert("Confirm Password is empty");
		//document.getElementById('pwd2').focus();
		return false;
	} else if(ph.length == 0){
		document.getElementById('phoneno').style.backgroundColor= "#cc0033";
		alert("Phone Number is empty");
		//document.getElementById('phoneno').focus();
		return false;
	} else if(gen.length == 0){
		document.getElementById('gender').style.backgroundColor= "#cc0033";
		alert("Gender is empty");
		//document.getElementById('gender').focus();
		return false;
	} else if(add.length == 0){
		document.getElementById('address').style.backgroundColor= "#cc0033";
		alert("Address is empty");
		//document.getElementById('address').focus();
		return false;
	} else if(em1.length == 0){
		document.getElementById('email').style.backgroundColor= "#cc0033";
		alert("Email is empty");
		//document.getElementById('email').focus();
		return false;
	} else if(em2.length == 0){
		document.getElementById('email2').style.backgroundColor= "#cc0033";
		alert("Confirm Email is empty");
		//document.getElementById('email2').focus();
		return false;
	} else if(dat.length == 0){
		document.getElementById('date').style.backgroundColor= "#cc0033";
		alert("Date is empty");
		//document.getElementById('date').focus();
		return false;
	}else if(pd != pd2){
		document.getElementById('pwd').style.backgroundColor= "#cc0033";
		//document.getElementById('pwd2').style.backgroundColor= "#cc0033";
		alert("Confirm Password not same as Password");
		//document.getElementById('date').focus();
		return false;
	} else if(em1 != em2){
		document.getElementById('email').style.backgroundColor= "#cc0033";
		document.getElementById('email2').style.backgroundColor= "#cc0033";
		alert("Confirm Email not same as Email");
		//document.getElementById('date').focus();
		return false;
	} else if(ph.match(phone)) {
		document.getElementById('phoneno').style.backgroundColor= "#cc0033";
		alert("Phone Number format is invalid");
		return false;

	} else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(em1)) {
		document.getElementById('email2').style.backgroundColor= "#cc0033";
		alert("Email format is invalid");
		return false;

	} else {
		return true;
	}
	}
	</script>


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