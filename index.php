<?php
session_start();

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
	
 
 
<script src="jquery.sumoselect.min.js"></script>
<link href="sumoselect.css" rel="stylesheet" />
 
     
     

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />

    <!-- Document Title
    ============================================= -->
	<title>MyTailors | </title>

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
				<?php
						if(isset($_SESSION['name'])){
							echo "<h4>Hi ". $_SESSION['name']."</h4>";
						}
				?>

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
                                <div class="top-link-section">
                                    <form id="top-login" role="form">
                                        <div class="input-group" id="top-login-username">
                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                            <input type="email" class="form-control" placeholder="Email address" required="">
                                        </div>
                                        <div class="input-group" id="top-login-password">
                                            <span class="input-group-addon"><i class="icon-key"></i></span>
                                            <input type="password" class="form-control" placeholder="Password" required="">
                                        </div>
                                        <label class="checkbox">
                                          <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                        <button style="font-weight:bold; background-color:green ; border-color:green"class="btn btn-danger btn-block green" type="submit">Sign in</button>
                                    </form>
                                </div>
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
									 <?php
												require "config.php"; // Database Connection
                                                echo ' <select  name="location" id="interest"  tabindex="9" class="sm-form-control " placeholder=""   data-live-search="true" value=>';
												echo'  <option value="OTHER">Any</option>';
												$sql="select LocNm from loc "; // Query to collect records
												foreach ($dbo->query($sql) as $row) {
													echo "<option value=".$row['LocNm'].">".$row['LocNm']."</option>"; // Format for adding options 
													
												}
													echo "</select>";
													$dbo=null;
											?>
											
								</div>
								
								 
								
								<div class="col_one_third ">
									 
                                <select  name="cat" id="interest"  tabindex="9" class="sm-form-control " placeholder=""   data-live-search="true" value="Blouses">
                                    <option value="Blouses">Select Type</option>
                                      
									<option value="Blouses">All</option>
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
		

        <section id="slider" class="slider-parallax revslider-wrap ohidden clearfix">

            <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>    <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" data-title="Designer Collections" style="background-color: #F6F6F6;">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="100"
                    data-y="50"
                    data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="400"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""><img src="pics/1.png" alt="Girl"></div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="570"
                    data-y="75"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: green; font-weight:bold">Get your dress designed by elite designers !</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                    data-x="570"
                    data-y="105"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1200"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; max-width: 430px; white-space: normal; line-height: 1.15;"> For your Special Day.</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                    data-x="570"
                    data-y="275"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1400"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">Our elite designers will come to your home, take the measurements &amp; create a master piece and then deliver it back to you.</div>

                    <div class="tp-caption customin ltl tp-resizeme"
                    data-x="570"
                    data-y="375"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1550"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""> 

                </li>
                <!-- SLIDE  -->
                <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="10000"  data-saveperformance="off"  data-title="Designer Wear" style="background-color: #E9E8E3;">
                    <!-- LAYERS -->

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="630"
                    data-y="78"
                    data-customin="x:250;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="400"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""><img src="pics/2.png" alt="Bag"></div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                    data-x="0"
                    data-y="110"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1000"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: green; font-weight:bold">Get your dress designed by elite designers !</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
                    data-x="0"
                    data-y="140"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1200"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; white-space: normal; line-height: 1.15;">Dress Up.</div>

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text tleft"
                    data-x="0"
                    data-y="240"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1400"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">Our elite designers will come to your home, take the measurements &amp; create a master piece and then deliver it back to you..</div>

                    <div class="tp-caption customin ltl tp-resizeme"
                    data-x="0"
                    data-y="340"
                    data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="700"
                    data-start="1550"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""> </div>

                    <div class="tp-caption customin utb tp-resizeme revo-slider-caps-text uppercase"
                    data-x="510"
                    data-y="0"
                    data-customin="x:0;y:-236;z:0;rotationZ:0;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                    data-speed="600"
                    data-start="2100"
                    data-easing="easeOutQuad"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.1"
                    data-endspeed="1000"
                    data-endeasing="Power4.easeIn" style=""><img src="images/slider/rev/shop/tag.png" alt="Bag"></div>

                </li>
            </ul>
            </div>
            </div>

            <script type="text/javascript">

                jQuery(document).ready(function() {

                    jQuery('.tp-banner').show().revolution(
                    {
                        dottedOverlay:"none",
                        delay:16000,
                        startwidth:1140,
                        startheight:500,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:5,

                        navigationType:"none",
                        navigationArrows:"solo",
                        navigationStyle:"preview2",

                        touchenabled:"on",
                        onHoverStop:"on",

                        swipe_velocity: 0.7,
                        swipe_min_touches: 1,
                        swipe_max_touches: 1,
                        drag_block_vertical: false,

                        parallax:"mouse",
                        parallaxBgFreeze:"on",
                        parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                        keyboardNavigation:"off",

                        navigationHAlign:"center",
                        navigationVAlign:"bottom",
                        navigationHOffset:0,
                        navigationVOffset:20,

                        soloArrowLeftHalign:"left",
                        soloArrowLeftValign:"center",
                        soloArrowLeftHOffset:20,
                        soloArrowLeftVOffset:0,

                        soloArrowRightHalign:"right",
                        soloArrowRightValign:"center",
                        soloArrowRightHOffset:20,
                        soloArrowRightVOffset:0,

                        shadow:0,
                        fullWidth:"on",
                        fullScreen:"off",

                        spinner:"spinner4",

                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,

                        shuffle:"off",

                        autoHeight:"off",
                        forceFullWidth:"off",



                        hideThumbsOnMobile:"off",
                        hideNavDelayOnMobile:1500,
                        hideBulletsOnMobile:"off",
                        hideArrowsOnMobile:"off",
                        hideThumbsUnderResolution:0,

                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        startWithSlide:0,
                        fullScreenOffsetContainer: ".header"
                    });




                }); //ready

            </script>

            <!-- END REVOLUTION SLIDER -->

        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

			<div class="container">
			<div class="topmargin-lg bottommargin-lg">
			 <div class="heading-block center" >
                                <h3 style="color:green" class="hvr-grow"  >vinit agarwal</h3>
                                 <span style="color:black; font-weight:bold"> It is as simple as counting 1 to 4</span> 
                            </div>
			       <div id="processTabs">
                        <ul class="process-steps bottommargin clearfix">
                            <li>
                                <a href="#ptab1" class="i-circled i-bordered i-alt divcenter">1</a>
                                <h5>Place Order</h5>
                            </li>
                            <li>
                                <a href="#ptab2" class="i-circled i-bordered i-alt divcenter">2</a>
                                <h5>Measurement and Pick Up</h5>
                            </li>
                            <li>
                                <a href="#ptab3" class="i-circled i-bordered i-alt divcenter">3</a>
                                <h5> Stitching</h5>
                            </li>
                            <li>
                                <a href="#ptab4" class="i-circled i-bordered i-alt divcenter">4</a>
                                <h5>Delivery</h5>
                            </li>
                        </ul>
                        <div>
                            <div id="ptab1">
 <div class="alert alert-success">
                                 <p style="color:black; font-weight:bold" class="center">One can easily find the finest of the fine dressmakers and

designers in their own vicinity with the help of 

MyTailorz.com according to their preferred specifications, 

date, time and convenience..</p>

                               </div> 
							      <div class="line"></div>

                                <a href="#" class="button button-3d nomargin fright tab-linker" rel="2">Measurement &rArr;</a>

                            </div>
                            <div id="ptab2">
							 <div class="alert alert-success">
                                 <p style="color:black; font-weight:bold" class="center">The service providers/ experts will come at your doorstep to

collect the materials, take the measurements for the fitting 

and deliver the final stitched clothes. </p>
</div>
                   <div class="line"></div>
                                
                                <a href="#" class="button button-3d nomargin tab-linker" rel="1">Place Order</a>
                                <a href="#" class="button button-3d nomargin fright tab-linker" rel="3">Stitching</a>
                            </div>
                            <div id="ptab3">
							<div class="alert alert-success">
                                <p style="color:black; font-weight:bold" class="center">The clothes are stitched and altered by elite class of tailors.

The end users can easily track and are also regularly updated 

about the status of their dress materials.</p>
</div>
                                <div class="line"></div>
                                <a href="#" class="button button-3d nomargin tab-linker" rel="2">Measurement</a>
                                <a href="#" class="button button-3d nomargin fright tab-linker" rel="4">Delivery</a>
                            </div>
                            <div id="ptab4">
                                <div class="alert alert-success">
                                   <p style="color:black; font-weight:bold" class="center">The delivery is done well within the stipulated time.<br> We also

take care of any further alteration or changes required to the 

delivered product. In that case, no extra charges are incurred.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                      $(function() {
                        $( "#processTabs" ).tabs({ show: { effect: "fade", duration: 400 } });
                        $( ".tab-linker" ).click(function() {
                            $( "#processTabs" ).tabs("option", "active", $(this).attr('rel') - 1);
                            return false;
                        });
                      });
                    </script><div class="topmargin-lg"></div></div>
			 <div class="heading-block" >
                                <h3 style="color:green" class="hvr-grow"  >Designers of the Day : </h3>
                                 <span style="color:black; font-weight:bold"> They Weave Magic</span> 
                            </div>
			 <div class="col_one_third bottommargin-lg">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="pics/img/e1.jpg" alt="Image">
                            </div>
                            <div class="fbox-desc">
                                <h3>Oriental Clothing<span class="subtitle"></span></h3>
                                <p><a href="#" class="btn btn-default">Design Now</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third bottommargin-lg">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="pics/img/e2.jpg" alt="Image">
                            </div>
                            <div class="fbox-desc">
                                <h3>Manish Malhotra<span class="subtitle"> </span></h3>
                                <p><a href="#" class="btn btn-default">Design Now</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col_one_third bottommargin-lg col_last">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="pics/img/g4.jpg" alt="Image">
                            </div>
                            <div class="fbox-desc">
                                <h3>Ritu Beri<span class="subtitle"></span></h3>
                                <p><a href="#" class="btn btn-default">Design Now</a></p>
                            </div>
                        </div>
                    </div>
					
</div>
                    <div class=" topmargin clear"></div>
						<div class="container nobottommargin ">
					
					
					<div class="topmargin-sm bottommargin-lg">
					<div class="col-md-5 hidden-sm hidden-xs">
					 <div class="fslider flex-thumb-grid grid-6 bottommargin-sm " data-arrows="false" data-animation="fade" data-thumbs="true">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><img  data-src="holder.js/300x200" alt="300x200"src="pics/img/g1.jpg" alt="Image"></div>
                                    <div class="slide"><img  data-src="holder.js/300x200" alt="300x200"src="pics/img/g2.jpg" alt="Image"></div>
                                    <div class="slide"><img data-src="holder.js/300x200" alt="300x200" src="pics/img/g4.jpg" alt="Image"></div>
                                    <div class="slide"><img  data-src="holder.js/300x200" alt="300x200"src="pics/img/g5.jpg" alt="Image"></div>
                                    <div class="slide"><img  data-src="holder.js/300x200" alt="300x200"src="pics/img/g6.jpg" alt="Image"></div>
                                    <div class="slide"><img data-src="holder.js/300x200" alt="300x200" src="pics/img/g7.jpg" alt="Image"></div>
                                      
                                    
                                </div>
                            </div>
                        </div>

					</div>
					<div class="col-md-1 ">
					</div>
					<div class="col-md-6 ">
					 <div class="heading-block " >
                                <h3 style="color:green" class="hvr-grow"  >MyTailorz.Com</h3>
                                 <div class="text-rotater" data-separator="|" data-rotate="fadeIn" data-speed="4500" style="color:black">
                            <p  style="color:black; font-weight:bold" ><span class="t-rotate " style="color:black; font-weight:bold">Connecting the Elite Designers of the country with you | Be the best You | Keep Calm. we take care of all your dressing dreams </span></p>
                        </div>
                            </div>
<div style="">
                            <p style="color:black; font-weight:bold" data-animate="fadeInRight">
							The herculean task of finding the right tailor can now be done in minutes. My Tailorz.com

relieves the end-users from the arduous scramble of finding an economical, approachable and 

elite class of tailors for themselves.<br><br>

							MyTailorz.com is an aggregator of tailors and designers in a very

short span of time. It has marked the milestone by collaborating with the best 

quality of tailors and fashion designers, thus providing the end users with an 

easy hassle free service..</p>
</div>
                              </div>
					
                   </div>
				   </div>
				   
				          <div class="container clearfix">

                    

                     

                    

                

                    <div class="clear bottommargin-sm"></div>

                    
                     

                    

                    <div class="clear"></div>

                    <div class="fancy-title title-border title-center topmargin-sm">
                        <h4>Popular Brands</h4>
                    </div>

                    <ul class="clients-grid grid-6 nobottommargin clearfix">
                        <li><a href="#"><img src="pics/picsnew/123.jpg" alt="Clients" height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/124.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/125.png" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/126.png" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/131.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/128.gif" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/129.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/130.png" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/127.png" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/132.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/133.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/134.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/135.png" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/136.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/137.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/138.jpg" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/139.png" alt="Clients"height="100px" width="100px"></a></li>
                        <li><a href="#"><img src="pics/picsnew/140.jpg" alt="Clients"height="100px" width="100px"></a></li>
                    </ul>

                </div>
						<div id="features" style="background-color:white">
				   
<div class="container topmargin-sm bottommargin-lg">
					
					<div class="col-md-12">
					 <div class="heading-block" >
                                <h3 style="color:green" class="hvr-grow"  >Why Choose Us : </h3>
                                  <span style="color:black; font-weight:bold"> Because we help you look better</span>  
                            </div>
								</div>
<div class="col-md-6">
                             <div class="accordion clearfix">

                            <div class="acctitle" style="color:#0f407d"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Convenience</div>
                            <div class="acc_content clearfix" style="color:black">Just a few clicks and you can find your desired tailor. No

running behind. Our associated tailors will be at your 

doorstep for pick up, measurement and customer 

satisfaction..</div>

                            <div class="acctitle" style="color:#0f407d"> <i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Quality and satisfaction</div>
                            <div class="acc_content clearfix">We have collaborated with the finest of the fine dressmakers

and designers throughout the country ensuring quality and 

customer satisfaction.</div>

                            <div class="acctitle" style="color:#0f407d"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Pricing</div>
                            <div class="acc_content clearfix">We provide a range of price slabs which makes it easy and

affordable for the end users to choose the price slab they are 

comfortable with.</div>

							<div class="acctitle" style="color:#0f407d"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>On time Delivery</div>
                            <div class="acc_content clearfix" style="color:black"> We have set up powerful logistics for delivery which ensures

that the dresses are delivered well in time. We also have the 

urgent delivery option and same day delivery option to make 

it more convenient for you. </div>

                            <div class="acctitle" style="color:#0f407d"> <i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Certified Tailors</div>
                            <div class="acc_content clearfix">Our designers and tailors have been recognized and well

appreciated for their work. We associate with the tailors who 

have been certified for their aristocratic and fine stitching. 

Be assured, your dress is in the right hands.</div>

                             
							 
                        </div>
						<a href="#" data-animate="fadeInRight" data-scrollto="#facilities"  data-easing="easeInOutExpo"  data-speed="2500" data-offset="120"  class="button button-rounded hvr-float-shadow noleftmargin nobottommargin" style="background-color:green">Contact Us Now</a>

					
</div>
                             
					
					
				 
					<div class="col-md-6 hidden-sm hidden-xs">
					<div class="notopmargin center">
					  <div class="col-sm-6 col-md-12 center">
                            <div class="thumbnail">
                              <img data-src="holder.js/300x200" alt="300x200" src="pics/img/e1.jpg" style="display: block;">
                               
                            </div>
                          </div></div>

					</div>
					
                   </div>
                        
						
						 

        </div><!-- #content end -->
         

                <div class="section nobottommargin" style="background-color:#eee">
                    <div class="container clearfix ">

                        <div class="col_one_fourth nobottommargin">
                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="icon-thumbs-up2"></i>
                                </div>
                                <h3 style="color:green">Verified Tailors</h3>
                                <p class="notopmargin" style="color:black; font-weight:bold">All the designers and tailors are verified to ensure quality service.</p>
                            </div>
                        </div>

                        <div class="col_one_fourth nobottommargin">
                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <h3 style="color:green">Payment Options</h3>
                                <p class="notopmargin" style="color:black; font-weight:bold">We accept COD , so don't worry about hassles of money now.</p>
                            </div>
                        </div>

                        <div class="col_one_fourth nobottommargin">
                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="icon-truck2"></i>
                                </div>
                                <h3 style="color:green">Free Pickup/Delivery</h3>
                                <p class="notopmargin" style="color:black; font-weight:bold">Free Pickup/Delivery to 50+ Locations in Bangalore.</p>
                            </div>
                        </div>

                        <div class="col_one_fourth nobottommargin col_last">
                            <div class="feature-box fbox-plain fbox-dark fbox-small">
                                <div class="fbox-icon">
                                    <i class="icon-user"></i>
                                </div>
                                <h3 style="color:green">Exclusive Support</h3>
                                <p class="notopmargin" style="color:black; font-weight:bold">We provide 24 x 7 exclusive support to our clients.</p>
                            </div>
                        </div>

                    </div>
                </div>
 
                <div class="section notopborder nobottomborder nomargin nopadding nobg footer-stick">
                    <div class="container clearfix">

                        <div class="col_half nobottommargin topmargin">
                            <img src="pics/1.png" alt="Image" class="nobottommargin">
                        </div>

                        <div class="col_half nobottommargin col_last">

                            <div class="heading-block topmargin-lg">
                                <h3 tyle="color:green ; font-weight:bold"><strong style="color:green ; font-weight:bold">Stay Connected.</strong></h3>
                                <span class="blink_me " style="color:green ; font-weight:bold"></span></p>
                            </div>

                            <p style="color:black ; font-weight:bold">Stay Connected with MyTailorz.com. We will let you know of the upcoming designs from the finest of the fine designers. We will share our customized offers and portfolios on your mailbox</p>

                            <div id="widget-subscribe-form3-result" data-notify-type="success" data-notify-msg=""></div>
                            <form id="widget-subscribe-form3" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                <div class="input-group" style="max-width:400px;">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" name="widget-subscribe-form3-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="submit" style="background-color:green ; font-weight:bold; border-color:green">Subscribe Now</button>
                                    </span>
                                </div>
                            </form>

                            <script>
                                jQuery("#widget-subscribe-form3").validate({
                                    submitHandler: function(form) {
                                        jQuery(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                        jQuery(form).ajaxSubmit({
                                            target: '#widget-subscribe-form3-result',
                                            success: function() {
                                                jQuery(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                                jQuery('#widget-subscribe-form3').find('.form-control').val('');
                                                jQuery('#widget-subscribe-form3-result').attr('data-notify-msg', jQuery('#widget-subscribe-form3-result').html()).html('');
                                                SEMICOLON.widget.notifications(jQuery('#widget-subscribe-form3-result'));
                                            }
                                        });
                                    }
                                });
                            </script>

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
   
</body>
</html>