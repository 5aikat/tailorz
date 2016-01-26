<?php 
session_start();
require "config.php";
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
	<title>Checkout</title>
	<link href="dateselect/jquery-ui.css" rel="stylesheet">
	<style>
	datebodybody{
		font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
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
                                 
                            </li>
                            
                            <li><a href="#">Customer Login</a>
                                
                                
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
 
	<div id="contact-form-result" data-notify-type="success"  ></div>

							<form class="nobottommargin" id="template-contactform" name="template-contactform"  role="form" method="post" action="search.php">
 
								<div class="form-process"></div>
								 
								<div class="col_one_third">
									 <select  name="cat" id="interest"  tabindex="" class="sm-form-control " placeholder=""   data-live-search="true" value="Blouses">
                                    <option value="">Your Location </option>
                                    
									<option value="Blouses">Blouses</option>
                                                <option value="Salwar Kameez">Salwar Kameez</option>
                                                <option value="ETHINIC">Ethnic</option>
                                                <option value="SAREE WORKS">Saree Works</option>
                                                <option value="WESTERN">Western</option>
                                </select></div>
								
								 
								
								<div class="col_one_third ">
									 
                                <select  name="cat" id="interest"  tabindex="9" class="sm-form-control " placeholder=""   data-live-search="true" value="Blouses">
                                    <option value=""> Select Type </option>
                                    
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
		<!-- Page Title
		 

		<!-- Content
		============================================= -->
		<section id="">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_half">
						<div class="panel panel-default">
							<div class="panel-body">
								Returning customer? <a href="customerlogin.html">Click here to login</a>
							</div>
						</div>
					</div>
					<div class="col_half col_last">
						<div class="panel panel-default">
							<div class="panel-body">
								Edit Your cart? <a href="cart.php" >Go Back to Cart Page</a>
							</div>
						</div>
					</div>
					
					<div class="row clearfix">
						<div class="col-md-6">
							<h4>Last Step, <span> It is time to introduce yourself </span></h4>

							 
	                        <form id="customer-details-form" name="customer-details-form" class="nobottommargin" action="confirmorder.php" method="post">

	                            <div class="col_half">
	                                <label for="customer-name-first">Name:</label>
	                                <input type="text" id="customer-name-first" name="customer-name-first" value="" class="sm-form-control required" />
	                            </div>

	                           

	                            <div class="clear"></div>

	                            
	                            <div class="col_full">
	                                <label for="customer-address">Address:</label>
	                                <input type="text" id="customer-address" name="customer-address" value="" class="sm-form-control required" />
	                            </div>
 

	                            <div class="col_full">
	                                <label for="customer-landmark">Landmark</label>
	                                <input type="text" id="customer-landmark" name="customer-landmark" value="" class="sm-form-control required" />
	                            </div>

	                            <div class="col_half">
	                                <label for="customer-email">Email Address:</label>
	                                <input type="email" id="customer-email" name="customer-email" value=" <?php //echo $_SESSION['user']; ?>" class="sm-form-control required" />
	                            </div>

	                            <div class="col_half col_last">
	                                <label for="customer-phone">Phone:</label>
                                	<input type="text" id="customer-phone" name="customer-phone" value="" class="sm-form-control required" />
	                            </div>
								
								<h5 class="">Please fill the below information</h5>
								
								<div class="col_half">
	                                <label for="pickupdate">Pick Up Date:</label>
									 
                                
	                                <input type="text" id="datepicker" name="pickupdate" value="" class="sm-form-control" />
	                            </div>

	                            <div class="col_half col_last">
	                                <label for="pickuptime">Pick Up Time:</label>
									 
                             <select id="template-contactform-service" name="pickuptime" class="sm-form-control required">
                                    
                                  <option value="Any Time"> Any Time</option>
                                    <option value="10 AM - 02 PM">10 AM - 02 PM</option>
                                    <option value="02 PM - 06 PM">02 PM - 06 PM</option>
                                    <option value="After 6 PM">After 6 PM</option>
                                    
                                   
                                </select>
							</div>
							
							  <div class="col_half">
	                                 <label for="deliverydate">Want delivery with in :</label>
									  <select id="deliverydate" name="deliverydate" class="sm-form-control required">
                                    
                                   
                                    <option value="As early as possible">As early as possible</option>
                                    <option value="Less than 3 days"> Less than 3 days</option>
                                    <option value="Between 4 to 7 days">Between 4 to 7 days</option>
									 <option value="Between 8 to 15 days">Between 8 to 15 days</option>
                                    </select>
                                
	                                 
	                            </div>

	                            <div class="col_half col_last">
	                                <label for="delivery-time">Delivery Time:</label>
									 
                             <select id="template-contactform-service" name="deliverytime" class="sm-form-control required">
                                    
                                  <option value="Any Time"> Any Time</option>
                                    <option value="10 AM - 02 PM">10 AM - 02 PM</option>
                                    <option value="02 PM - 06 PM">02 PM - 06 PM</option>
                                    <option value="After 6 PM">After 6 PM</option>
                                    
                                   
                                </select>
							</div>
							
							
							 <div class="col_half">
	                                
									 
                                
	                             <label for="measurement-type">Measurement Type <small>*</small></label>
                                
                             <select id="measurement-type" name="measurement-type" class="sm-form-control required">
                                    
                                    <option value="Consultancy">Tailor needs to take measurement</option>
                                    <option value="Design Build">I will provide sample for measurement</option>
                                   
                                </select>
	                            </div>

	                            <div class="col_half col_last">
	                                <label for="">Upload Sample (optional) <small></small></label><br>
                               
							<div class="col_half col_last ">
							<input type="file" name="fileToUpload" id="fileToUpload"></div>
                                    
                                   
                                 
							</div>

	                        
						</div>
						<div class="col-md-6">
						 			<div class="table-responsive clearfix">
								<h4>Your Order :</h4>
								
								<table class="table cart">
									<thead>
										<tr>
											 
											<th class="cart-product-name">Product</th>
											<th class="cart-product-quantity">Quantity</th>
											<th class="cart-product-subtotal">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cart_item">
											 <?php
								

								if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
								{
									$total =0;
									$b = 0;
									foreach ($_SESSION["cart_products"] as $cart_itm)
									{
										$product_qty = $cart_itm["product_qty"];
										$product_name = $cart_itm["product_name"];
										$product_price = $cart_itm["product_price"];
										$product_code = $cart_itm["product_code"];
										$subtotal = ($product_price * $product_qty);
										$total = ($total + $subtotal);
							?>

											<td class="cart-product-name">
												<a href=""> <?php echo $product_name; ?></a>
											</td>

											<td class="cart-product-quantity">
												<div class="quantity clearfix">
													<?php echo $product_qty; ?>
												</div>
											</td>

											<td class="cart-product-subtotal">
												<span class="amount"> <?php echo $total; ?></span>
											</td>
										</tr>
									<?php } ?>
										
									</tbody>

								</table>

							</div>
							
							<div class="table-responsive topmargin">
								<h4>Cart Totals</h4>

								<table class="table cart">
									<tbody>
										<tr class="cart_item">
											<td class="notopborder cart-product-name">
												<strong>Cart Subtotal</strong>
											</td>

											<td class="notopborder cart-product-name">
												<span class="amount">Rs.<?php echo $total;  ?></span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Pickup & Shipping</strong>
											</td>

											<td class="cart-product-name">
												<span class="amount">Free </span>
											</td>
										</tr>
										<tr class="cart_item">
											<td class="cart-product-name">
												<strong>Total</strong>
											</td>

											<td class="cart-product-name">
								<span value="totalValue" id="totalValue" class="amount color lead"><strong> Rs <?php echo $total; } ?></strong></span>
											</td>
										</tr>
									</tbody>
								</table>

							</div>
	                            </div>

	                            <div class="clear"></div>
 

	                     
						</div>
						<div class="clear bottommargin"></div>
						 
							 
	                        <div class="col_half">
							
							<button type="submit" name="submit"  value="submit" id="submit" class="button button-3d fright">Confirm your order</button>
</div>
</form>

<div class="col_half col_last">							
							
 
							</div>
							
						 </div>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

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
	
	<script src="dateselect/external/jquery/jquery.js"></script>
<script src="dateselect/jquery-ui.js"></script>
<script>











$( "#datepicker" ).datepicker({
	inline: true
});














// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>

</body>
</html>