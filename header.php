    <header class="header_area" id="header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.php">Brooke-Eshcol Systems</a>
						<script>
										function navclose() {
										  var x = document.getElementById("nav10");
										  if (x.getAttribute("aria-expanded") == "true") {
											x.setAttribute("aria-expanded", "false");
										  } 
										}
									</script>
                        <button id="nav10" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation" onclick="navclose()"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
								<?php
                                if (!isset($_SESSION['email']))
								{
									?>
										<li class="nav-item">
                                    <a class="nav-link" href="profile.php">Profile</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="services.php">Services</a>
                                </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="signup.php">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                              	<?php } else {?>
								<li class="nav-item">
                                    <a class="nav-link" href="index.php?logout='1'">Logout</a>
                                </li><?php } ?>
							     
                            </ul>
                            <!-- Search & Shop Btn Area -->
                            <div class="fancy-search-and-shop-area">
                                <a id="search-btn" href="#"><i class="icon_search" aria-hidden="true"></i></a>
                                <a id="shop-btn" href="Login.php"><i class="icon_bag_alt" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>