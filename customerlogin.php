<?php
 session_start();

		if(isset($_GET['submit'])){
			
			$email=$_GET['email'];
			$pass=$_GET['password'];
			
				$link = mysql_connect("localhost", "root", "");
				mysql_select_db("mytailerz", $link);

				$result = mysql_query("SELECT * FROM user where email ='".$email."' AND pass='".$pass."'");
				$num_rows = mysql_num_rows($result);
				if($num_rows>0){
					$_SESSION['user']=$email;
					$_SESSION['pass']=$pass;
					while ($row1=mysql_fetch_array($result)) 
					$_SESSION['name']=$row1['uname'];
					header('location:index.php');
				}
				else{
					echo"User or Password not Matched";
					header('location:customerlogin.php');
			}
		}	
              else{
				  	
				
		

	?>




<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Login - Layout 2 | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
    <div id="top-bar">

            <div class="container clearfix">

                <div class="col_half nobottommargin hidden-xs">

                    <p class="nobottommargin" style="font-weight:bold; color:black" ><strong style="font-weight:bold; color:green">Call Us : </strong> 1800-547-2145 | <strong style="font-weight:bold; color:green">Email Us:</strong> info@mytailorz.com  <span class="blink_me leftmargin" style="color:green">Use Code MYDRESS to get upto 30% off on your orders  !</span></p>

                </div>

                <div class="col_half col_last fright nobottommargin">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul>
						<li style="font-weight:bold; color:green">
						<a href="#" data-scrollto="#content" data-href="#content" data-speed="1500" data-offset="-40" style="font-weight:bold; color:green">How It Works</a></li>
                            <li><a href="#" style="font-weight:bold; color:green">Dress Makers</a>
                                <ul>
                                    <li><a href="#">Login/Register</a></li>
                                  
                                </ul>
                            </li>
                            
                            <li><a href="#">Customer Login</a>
                                <ul>
                                    <li><a href="#">Login/Register</a></li>
                                  
                                </ul>
                            </li>
                        </ul>
                    </div><!-- .top-links end -->

                </div>

            </div>

        </div><!-- #top-bar end -->
		<!-- Header
		============================================= -->
  <header id="header">

            <div id="header-wrap">

 
            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="pics/logo.jpg"><img src="pics/logo.jpg" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="pics/logo.jpg"><img src="pics/logo.jpg" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <ul class="header-extras">
				
				<li>
 
	<div id="contact-form-result" data-notify-type="success" data-notify-msg="Thank You ! Message Sent Successfully!"></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform"  role="form" method="post" action="search.php">
 
								<div class="form-process"></div>
								 
								<div class="col_one_third">
									 <select  name="cat" id="interest"  tabindex="9" class="sm-form-control " placeholder=""   data-live-search="true" value="Blouses">
                                    <option value="">Your Location</option>
                                    
									<option value="Blouses">Blouses</option>
                                                <option value="Salwar Kameez">Salwar Kameez</option>
                                                <option value="ETHINIC">Ethnic</option>
                                                <option value="SAREE WORKS">Saree Works</option>
                                                <option value="WESTERN">Western</option>
                                </select></div>
								
								 
								
								<div class="col_one_third ">
									 
                                <select  name="cat" id="interest"  tabindex="9" class="sm-form-control " placeholder=""   data-live-search="true" value="Blouses">
                                    <option value="">-- Select Type --</option>
                                    
									<option value="Blouses">Blouses</option>
                                                <option value="Salwar Kameez">Salwar Kameez</option>
                                                <option value="ETHINIC">Ethnic</option>
                                                <option value="SAREE WORKS">Saree Works</option>
                                                <option value="WESTERN">Western</option>
                                </select>
								
								 
								</div>
								
								
									<div class="col_one_third col_last">
									   <button type="submit"  class="button button-rounded button-reveal">Search Tailor <i class=" icon-search"></i></button>
                        </div>
								 
								 

								<div class="clear"></div>

								 

							

							</form>
							<script type="text/javascript">
											function onSelectChange1()
											{
												var str=document.getElementById('location');
												if(str.value=='OTHER'){
													document.getElementById('text').style.visibility='visible';
												}
												else
													document.getElementById('text').style.visibility='hidden';
												
											}


										</script>

							 

 
				</li>
				 
                    
                    
                </ul>

            </div>

            </div>

        </header><!-- #header end -->

		 

		<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap clearfix" style="background-image:url(pics/img/1.jpg); left background-repeat: no-repeat; background-size:100% 100% ; background-image:rgba(0,0,0,0.7); "  >
			

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

                        <ul class="tab-nav tab-nav2 center clearfix">
                            <li class="inline-block"><a href="#tab-login">Customer Login</a></li>
                            <li class="inline-block"><a href="#tab-register">Customer Register</a></li>
                        </ul>

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="tab-login">
                                <div class="panel panel-default nobottommargin">
                                	<div class="panel-body" style="padding: 40px;">
                                		<form id="login-form" name="login-form" class="nobottommargin" action="user-login.php" method="post">

			                                <h4 class="center"> Welcome Back , <span> It is time to look beautiful again</span></h4>

			                                <div class="col_full">
			                                    <label for="login-form-username">Email:</label>
			                                    <input type="text" id="login-form-username" name="email" class="form-control"  placeholder="email" required/>
			                                </div>

			                                <div class="col_full">
			                                    <label for="login-form-password">Password:</label>
			                                    <input type="password" id="login-form-password"  class="form-control" name="password"  placeholder="Password" required />
			                                </div>

			                                <div class="col_full nobottommargin">
			                                    <button class="button button-3d button-black nomargin" id="login-form-submit" name="submit" value="login">Login</button>
			                                    <a href="#" class="fright">Forgot Password?</a>
			                                </div>

			                            </form>
                                	</div>
                                </div>
                            </div>

                            <div class="tab-content clearfix" id="tab-register">
                                <div class="panel panel-default nobottommargin">
                                	<div class="panel-body" style="padding: 40px;">
                                		  <h4 class="center"> Hello, <span> It is time to start looking beautiful</span></h4>
                                		<form id="register-form" name="register-form" class="nobottommargin" action="user-reg.php" method="post">

				                            <div class="col_full">
				                                <label for="register-form-name">Name:</label>
				                                <input type="text" id="register-form-name" name="name"  class="form-control" required/>
				                            </div>

				                            <div class="col_full">
				                                <label for="register-form-email">Email Address:</label>
				                                <input type="text" id="register-form-email" name="email" value="" class="form-control" required/>
				                            </div>

				                            
				                            <div class="col_full">
				                                <label for="register-form-phone">Phone:</label>
				                                <input type="text" id="register-form-phone" name="phone" value="" class="form-control" required />
				                            </div>

				                            <div class="col_full">
				                                <label for="register-form-password">Choose Password:</label>
				                                <input type="password" id="register-form-password" name="password" value="" class="form-control" />
				                            </div>

				                            <div class="col_full">
				                                <label for="register-form-repassword">Re-enter Password:</label>
				                                <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
				                            </div>

				                            <div class="col_full nobottommargin">
				                                <button class="button button-3d button-black nomargin" id="register-form-submit" name="Submit" value="register">Register Now</button>
				                            </div>

				                        </form>
                                	</div>
                                </div>
                            </div>

                        </div>

                    </div>

				</div>

			</div>

		</section><!-- #content end -->
		 <div class="si-sticky si-sticky-right hidden-sm hidden-xs">
                    <a href="#" class="social-icon si-colored si-facebook" data-animate="bounceInRight">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-colored si-twitter" data-animate="bounceInRight" data-delay="100">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="social-icon si-colored si-pinterest" data-animate="bounceInRight" data-delay="200">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>
                    <a href="#" class="social-icon si-colored si-instagram" data-animate="bounceInRight" data-delay="300">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>
                    <a href="#" class="social-icon si-colored si-gplus" data-animate="bounceInRight" data-delay="600">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>
                    <a href="#" class="social-icon si-colored si-rss" data-animate="bounceInRight" data-delay="700">
                        <i class="icon-rss"></i>
                        <i class="icon-rss"></i>
                    </a>
                </div>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

		 

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>

<?php


 
 }

?>