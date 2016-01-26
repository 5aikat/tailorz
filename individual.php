<?php
	session_start();
	if(isset($_POST['submit'])){
	$_SESSION['vid']=$_POST['id'];
	
	}
	require "config.php"; // Database Connection
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		try{       
		$id=$_SESSION['vid'];
		$sql1=$dbo->prepare("select * from VENDORS Where VndrId ='".$id."'");
		$sql1->execute();
		$row=$sql1->fetch();
		
		$sql2=$dbo->prepare("select * from loc where locid = (SELECT locid FROM `addr` WHERE id='".$id."' limit 1)");
		$sql2->execute();
		$row1=$sql2->fetch();
		
		$sql3=$dbo->prepare("select * from addr Where Id ='".$id."'");
		$sql3->execute();
		$row2=$sql3->fetch();
		
		$sql4=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$id."' AND TrtNbr=1");
		$sql4->execute();
		$row3=$sql4->fetch();
		
		$sql5=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$id."' AND TrtNbr=3");
		$sql5->execute();
		$row4=$sql5->fetch();
		
		$sql6=$dbo->prepare("SELECT * FROM `email` WHERE Id='".$id."'");
		$sql6->execute();
		$row5=$sql6->fetch();
		
		$sql7=$dbo->prepare("SELECT * FROM `phone` WHERE Id='".$id."'");
		$sql7->execute();
		$row6=$sql7->fetch();
		
		$sql8=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$id."' AND TrtNbr=2");
		$sql8->execute();
		$row7=$sql7->fetch();
		
		
		}
		catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	
		$dbo=null;
		}
		$dbo=null;

?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sands Zenith" />

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

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Document Title
    ============================================= -->
	<title>Details</title>

    <style>

        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Raleway', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Raleway', sans-serif;
        }

    </style>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Top Bar
        ============================================= -->
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

       

        <!-- Content
        ============================================= -->

</div>
<script>
  $(".event-links header").click(function () {
    var box = $(".event-links");
    if(!box.hasClass("up")){
      box.animate({"bottom":"0px"}, 500);
      box.addClass("up");
    } else {
      box.animate({"bottom":"-265px"}, 500);
      box.removeClass("up");
    }

  });
</script>
<section id="content" style="background-image:url(img/.jpg);   background: linear-gradient(to right, #095764 , #159c7c); ">


                <div class="container clearfix">
				 
                    
                             
                         
                           
					 <!-- Post Content
                    ============================================= -->
					
                   

                        
		 
						 <div class="postcontent topmargin nobottommargin clearfix">
 <div class="pricing-box pricing-extended nobottommargin clearfix">

                        <div class="pricing-desc nobottommargin" style="padding-bottom:0px; background-color:">
                            <div class="pricing-title " style="color:brown ">
                                <h3 style="color:brown"> <a href="#" style="color:brown" > </a> </h3>
								
                            </div>
							
                            <div class="pricing-features nobottommargin">
                                <ul class="clearfix">
                                    <li><i class="icon-globe"></i><span style="font-weight:bold">  Place:</span><?php echo $row1['LocNm'].",".$row2['City'];  ?></li>
                                    <li><i class="icon-eye-open"></i><span style="font-weight:bold">Kilometers Coverage:</span><?php echo $row3['TrtVal']."km";?></li>
                                    <li><i class="icon-beaker"></i><span style="font-weight:bold">  Avg Delivery Time:</span>  <?php echo $row7['TrtVal'];?> days</li>
                                    <li><i class="icon-money"></i><span style="font-weight:bold"> Same Day Delivery :</span> <?php echo $row4['TrtVal'];?></li>
                                    <li><i class="icon-book"></i><span style="font-weight:bold"> Shop Type</span> Boutique</li>
									 <li><i class="icon-book"></i><span style="font-weight:bold"> Customer Rating:</span> 7 </li>
									 
									<br>

                                    
                                </ul>
								 <br>
								<p  style="font-weight:bold"><span style="color:black ;"> Our Review :</span><span style="color:green"> 	<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div></p>
                            </div>
                        </div>
 
                        <div class="pricing-action-area nobottommargin">
                                      <div class="fslider flex-thumb-grid grid-6 bottommargin-sm " data-arrows="false" data-animation="fade" data-thumbs="false">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><img src="pics/img/e1.jpg" alt="Image"></div>
                                    <div class="slide"><img src="pics/img/e2.jpg" alt="Image"></div>
                                    <div class="slide"><img src="pics/img/e3.jpg" alt="Image"></div>
                                    <div class="slide"><img src="pics/img/e4.jpg" alt="Image"></div>
                                    
                                </div>
                            </div>
							<a href="#" class="button button button-small  topmargin-sm nobottommargin ">View Now</a>
								
                        </div>
							
                             
                              
                             
							
                        </div>

                    </div>
					  <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading" style=" background-color:#8c0a03; font-weight:bold; color:white">Services: </div>
                            <div class="panel-body">
                                <ul id="myTab" class="nav nav-tabs boot-tabs">
								
						 <?php
															require "config.php"; // Database Connection
															$sql8="Select * from Ratechart R LEFT JOIN SUBCATEG S ON R.SUBCATEGID=S.SUBCATEGID where VndrId='".$id."' "; // Query to collect records
															foreach ($dbo->query($sql8) as $row7){
															
														
														echo'<form method="post" action="cart_update.php">
														<div class="list-item">
															<div class="right">
                                                                <h4>'.$row7['subcategDesc'].'</h4>
																
                                                                <figure>'.$row7['Price'].' RS</figure>
                                                            </div>
                                                            <div class="right">
															<input type="number" name="product_qty" value="1" />
															<input type="hidden" name="product_code" value='.$row7['SubCategId'].' />
															<input type="hidden" name="type" value="add" />
															<input type="hidden" name="return_url" value="{$current_url}" />
															<div align="center"><button type="submit" class="add_to_cart">Add</button></div>
															
															</div>
                                                        </div>
														</form>
                                                        <!-- /.list-item -->';
														 }
														 $dbo=null;
                                                        ?>
															 
							   
							 
							 
							 
							 
							 
						  
						    </div>

                            <!-- List group -->
                             
                        </div>

                       
                    </div><!-- .postcontent end -->
					
                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar topmargin nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap nobottommargin ">

                            <div class="list-group notopmargin">
                             
                            <a href="#" class="list-group-item center" style="     background-color:#8c0a03; font-weight:bold; color:white">Contact Information</a>
                            
                            <a href="#" class="list-group-item " ><span style="font-weight:bold"> Address :</span>
<?php  echo $row2['AddrLine1'];?><br>
Karnataka, India. </a>
							
						 </div>
						 
						 
									
						 
						 
<div class="list-group notopmargin" style="color:brown; font-weight:bold">
                             
                            <a href="#" class="list-group-item center" style="background-color:#8c0a03; font-weight:bold; color:white">About</a>
                            <a href="#" class="list-group-item"  >Similique fugit repellendus expedita excepturi iure perferendis provident</a>
							
							    
                        </div>
						
						<div class="list-group notopmargin" style="color:black; font-weight:bold">
                             
                            <a href="#" class="list-group-item center" style="  background-color:#8c0a03; font-weight:bold; color:white">Reviews</a>
                         
                            <div class="fslider testimonial testimonial-full nobottommargin" data-animation="fade" data-arrows="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                     
                                    <div class="" style="font-size=14px">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta center">
                                            Atulya S.
                                            <span>Ex Student</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                     
                                    <div class="" style="font-size=14px"> 
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta center">
                                            Akshara S.
                                            <span>Ex Student</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                     
                                    <div class="">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta center">
                                            Anshika S.
                                            <span>Ex Student</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
						</div>

                                
                    </div><!-- .sidebar end -->

                

            

        </section><!-- #content end -->

                <!-- Footer
        ============================================= --> 
        <footer id="footer" class="dark" style="background-color:#5e0000">

            

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half" style="color:white">
                        Copyrights &copy; 2015 All Rights Reserved by mytailorz India.<br>
                        <div class="copyright-links">Designed By : <a href="#" style="color:#fff">Sands Zenith</a></div>
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="#" class="social-icon si-small si-borderless si-facebook" style="color:white">
                                <i class="icon-facebook" style="color:white"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter" style="color:white"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus" style="color:white"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest" style="color:white"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo" style="color:white"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github" style="color:white"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo" style="color:white"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin" style="color:white"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                        <div class="clear" ></div>
<div style="color:white">
                        <i class="icon-envelope2" style="color:white"></i> info@mytailorz.com <span class="middot" style="color:white">&middot;</span> <i class="icon-headphones" style="color:white"></i>  012 - 234 - 345 <span class="middot" style="color:white">&middot;</span> <i class="icon-skype2" style="color:white"></i> mytailorzOnSkype
                    </div>
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
<script>
  $(".event-links header").click(function () {
    var box = $(".event-links");
    if(!box.hasClass("up")){
      box.animate({"bottom":"0px"}, 500);
      box.addClass("up");
    } else {
      box.animate({"bottom":"-265px"}, 500);
      box.removeClass("up");
    }

  });
</script>
</body>
</html>