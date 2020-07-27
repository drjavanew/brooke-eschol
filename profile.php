<?php include('server.php') ?>
<?php 
  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
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
    <title>Brooke-Eshcol Systems - Sign Up</title>
     <!--===============================================================================================-->	
	   <link rel="icon" href="img/icon/logo2R.png">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Profile/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Profile/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Profile/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Profile/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="Profile/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Profile/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Profile/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="Profile/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="Profile/css/util.css">
        <link rel="stylesheet" type="text/css" href="Profile/css/main.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/formresponse.css">
	<script src="https://js.paystack.co/v1/inline.js"></script>
	

</head>
	  <!-- Favicon -->
   
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
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <!--Form-- Video Overview -->
                        <div class="video-overview">
                            <div class="limiter">
                                      <!-- ***** Sign Up area start  ***** -->
    <section class="fancy-blog-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12"> 
                </div>
            </div>
            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                
                                    <span class="login100-form-title p-b-6" id="name">
                                        Welcome <br/><?php
										echo $_SESSION['firstname']." ".$_SESSION['lastname'];
										?>
                                    </span>
                                    
                                        <span class="login100-form-pic p-b-10">
                                            <img src="Profile/images/avatarnew.png" alt="AVATAR">
											<br/><br/>

                                            </span>
                                        
                                     <span class="login100-form-title p-b-10">
									 
                                        <span class="input100" id="email">
										<b>Email</b><br/>
										<?php
										echo $_SESSION['email'];
										?>
										<hr/>
										</span>
                                    </span>
									
									<span class="login100-form-title p-b-10">
									 
                                        <span class="input100">
										<b>Date Registered</b><br/>
										<?php
										echo $_SESSION['date'];
										?>
										<hr/>
										</span>
                                    </span>
									
									<span class="login100-form-title p-b-10">
									 
                                        <span class="input100">
										<b>Phone Number</b><br/>
										<?php
										echo $_SESSION['phoneno'];
										?>
										<hr/>
										</span>
                                    </span>
									<span class="login100-form-title p-b-10">
									 
                                        <span class="input100">
										<b>Address</b><br/>
										<?php
										echo $_SESSION['address'];
										?>
										<hr/>
										</span>
                                    </span>
									
									<span class="input100">
                                        <b>Current Program</b><br/><?php
										if($coursehistory > 0){
											$coursehistory['cname'];
										}else{
											echo "None";
										}
										
										?>
                                    </span>
									<div id="myDIV" style="display:none">
									<?php
									if($payhistory > 0){ ?>
									<div class="login100-form-title p-b-6">
										<table>
										<thead>
										<tr><td>Program</td><td>Amount Paid</td><td>Date</td></tr>
										</thead>
										<?php
									while ($payhistory) 
									{ // if payment exists
								?>
								
						<tr><td><?php echo $payhistory['programname'];?></td><td><?php echo $payhistory['amount'];?></td><td><?php echo $payhistory['date'];?></td></tr>
									
									</table>
                                        
                                    </div>
								<?php
									  }
									} else {
										
									?>
									<div class="error">You have no payment history</div>
									<?php
									}
									?>
									
									</div>
									
									<script>
										function myFunction() {
										  var x = document.getElementById("myDIV");
										  if (x.style.display === "none") {
											x.style.display = "block";
										  } 
										}
									</script>
									<div class="container-login100-form-btn">
									
                                            <div class="wrap-login100-form-btn">
                                                <div class="login100-form-bgbtn"></div>
                                                <button class="login100-form-btn" onclick="myFunction()">
                                                  See Transaction
                                                </button>
                                            </div>
                                    </div>
                
                                   
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-12 col-md-6">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                <form class="login100-form validate-form">
								<span class="login100-form-title p-b-16">
                                        REGISTER NEW PROGRAM
                                    </span>
									<div class="wrap-input100 validate-input" data-validate = "Gender">
									<?php
									$user_check_query = "SELECT * FROM programtable";
									  $result = mysqli_query($db, $user_check_query);
									  $select= '<select name="select">';
									  
									  while ($program = mysqli_fetch_assoc($result)) { // if user exists

										$select.='<option value="'.$program['packages'].'">'.$program['packages'].'</option>';
										
									  }
									  $select.='</select>';
									  echo "$select";
									?>                                        
                                    </div>
									
									<div class="wrap-input100 validate-input" data-validate = "Amount">
                                        <select name="amount" id="amt">
                                            <option value=""> Select</option>
                                            <option value="1000">N100</option>
                                            <option value="50000">N5000</option>
                                            <option value="100000">N10000</option>
											<option value="1500000">N15000</option>
											<option value="2000000">N20000</option>
											<option value="2500000">N25000</option>
											<option value="3000000">N30000</option>
											<option value="3500000">N35000</option>
											<option value="4000000">N40000</option>
											<option value="4500000">N45000</option>
											<option value="5000000">N50000</option>
											<option value="5500000">N55000</option>
											<option value="6000000">N60000</option>
											<option value="6500000">N65000</option>
											<option value="7000000">N70000</option>
											<option value="7500000">N75000</option>
											<option value="8000000">N80000</option>
											<option value="8500000">N85000</option>
											<option value="9000000">N90000</option>
											<option value="9500000">N95000</option>
											<option value="10000000">N100000</option>
                                        </select>
                                        
                                    </div>
                    
								<input type=text id=em value="<?php echo $_SESSION['email'];	?>" hidden>
                
                                    <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <button type="button" class="login100-form-btn" name="program_reg" onclick="payWithPaystack()">
                                                Register
                                            </button>
                                        </div>

                                        
                                </form>

                            </div>
                        </div>
                    </div>
                    
                
                    <div id="dropDownSelect1"></div>
                    </div>
                </div>
                             

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
	</div>
    <!-- ***** Hero Area End ***** -->
	<script>
	
  function payWithPaystack(){
    var emailadd = document.getElementById("email").textContent;
	var amt = parseFloat(document.getElementById("amt").value) * 10;
      var handler = PaystackPop.setup({
      key: 'pk_live_596c3f9ba6144b76c64472d769c4de44b1e3c0cb',
      email: document.getElementById("em").value,
      amount: document.getElementById("amt").value,
      currency: "NGN",
      //ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: document.getElementById("name").textContent,
                variable_name: "mobile_number",
                value: "+2348064175701"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
          window.location = "profile.php?response="+response.reference
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
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