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
	<title>Search | My Tailors</title>
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
	
		.scrollable {
    height: 300px; /* or any value */
    overflow-y: auto;
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

        

        <!-- Content
        ============================================= -->
        <div class="event-links">
  
  <section>
     
  </section>
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
<section id="" style="background-image:url(img/103.jpg)">

            <div class="content-wrap">

                <div class="container clearfix">
				 
                    
					 <!-- Post Content
                    ============================================= -->
					 <div class="postcontent nobottommargin clearfix">

                         <div>
						 
						 </div>
 
						<?php

										
												require "config.php"; // Database Connection
												$id='';
												$loc=$_POST['location'];
												if(isset($_POST['text'])){
												$text=$_POST['text'];
												}
												else{
													$text='';
												}
												if(isset($_POST['cat'])){
													$cat=$_POST['cat'];
												}
												else
													$cat='Blouses';
												//echo"Name: $loc  and Text: $text";
												//echo"Catatgory:$cat";
                                                $sql="SELECT distinct v.vndrid, PrpNm,ShpNm,Email,AddrLine1,Phone FROM VENDORS V
														INNER JOIN ADDR A ON V.VNDRID=A.ID AND A.ADDRCATEG='SHOP'
														INNER JOIN LOC L ON A.LOCID=L.LOCID
														LEFT JOIN EMAIL E ON V.VNDRID=E.ID 
														LEFT JOIN PHONE P1 ON V.VNDRID=P1.ID 
														LEFT JOIN RATECHART R ON V.VNDRID=R.VNDRID 
														LEFT JOIN SUBCATEG S ON R.SUBCATEGID=S.SUBCATEGID
														LEFT JOIN CATEG C ON S.CATEGID=C.CATEGID
														WHERE (LOCNM =case when '".$loc."'='' then LOCNM else '".$loc."' end
														OR ('".$loc."' ='OTHER' 
														AND concat(COALESCE(A.ADDRLINE1,''),COALESCE(A.ADDRLINE2,''),COALESCE(A.CITY,''),COALESCE(A.STATE,'')
														,COALESCE(A.CNTRY,''),COALESCE(A.ZIP,''),COALESCE(A.LANDMARK,'')) LIKE '%".$text."%') 
														)
														AND (1=0 OR  CATEGNM IN ('".$cat."', '1'))
														AND (0=0 OR  SubCATEGdesc IN ('', '1'))

												";
	
								foreach ($dbo->query($sql) as $row) {
								
								
								$sql3=$dbo->prepare("select * from addr Where Id ='".$row['vndrid']."'");
								$sql3->execute();
								$row2=$sql3->fetch();
								
								
								$sql2=$dbo->prepare("select * from loc where locid = (SELECT locid FROM `addr` WHERE id='".$row['vndrid']."' limit 1)");
								$sql2->execute();
								$row1=$sql2->fetch();
								
								$sql4=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$row['vndrid']."' AND TrtNbr=1");
								$sql4->execute();
								$row3=$sql4->fetch();
								
								$sql5=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$row['vndrid']."' AND TrtNbr=3");
								$sql5->execute();
								$row4=$sql5->fetch();
								
								$sql6=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$row['vndrid']."' AND TrtNbr=2");
								$sql6->execute();
								$row5=$sql6->fetch();

								
		
										
							echo'
    
							<div class="pricing-box pricing-extended nobottommargin clearfix">

								<div class="pricing-desc nobottommargin" style="padding-bottom:0px; background-color:">
								<div class="pricing-title">
								<h3> <a href="#" style="color:blue">'.$row['PrpNm'].' </a> </h3>
								
                            </div>
							
                            <div class="pricing-features nobottommargin">
                                <ul class="clearfix">
                                    <li><i class="icon-globe"></i><span style="font-weight:bold"> Place:</span> '.$row1['LocNm'].', '.$row2['City'].'</li>
                                    <li><i class="icon-eye-open"></i><span style="font-weight:bold">Kilometers Coverage:</span> '.$row3['TrtVal'].'</li>
                                    <li><i class="icon-beaker"></i><span style="font-weight:bold"> Avg Delivery Time:</span> '.$row5['TrtVal'].'</li>
                                    <li><i class="icon-money"></i><span style="font-weight:bold"> Same Day Delivery :</span> '.$row4['TrtVal'].'</li>
                                    <li><i class="icon-book"></i><span style="font-weight:bold"> Shop Type</span>Boutique</li>
									 <li><i class="icon-book"></i><span style="font-weight:bold"> Customer Rating:</span> 7 </li>
									 
									<br>
                                   
                                    
                                </ul>
								 <br>
								<p><h3></h3></p>
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
									
								<form class="main-search border-less-inputs background-dark narrow" role="form" method="post" action="individual.php" >
														<div class="form-group">
							
														<input type="text" value='.$row['vndrid'].' name="id" style="visibility:hidden">
														<input type="submit" class="button button button-small  notopmargin nobottommargin " name="submit"  value="View Tailor"><br>
														
												</div>
												</form><br>
                                                
                                                
                        </div>
							<br>
						
                             
                                
                             
							
                        </div>

                    </div>

 
                        
					 ';
							
							}
							$dbo=null;
							?>
	
                    
					  

                        
				 
					 
				 
					  
					  
					 
		 

                       
                    </div><!-- .postcontent end -->
					
                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin col_last clearfix">
					
					
							<div class="widget widget_links clearfix">

                      
                                    <h2>Filters</h2>
                                
                                <div class="scrollable">
								<h3>Blouses</h3>
								
								  <input type="checkbox" name="vehicle" value="Bike"> Plain <br>
  <input type="checkbox" name="vehicle" value="Car"> Lining<br>
    <input type="checkbox" name="vehicle" value="Bike"> Designer<br>
  <input type="checkbox" name="vehicle" value="Car"> Princess Cut<br>
    <input type="checkbox" name="vehicle" value="Bike"> Katori<br>
  <input type="checkbox" name="vehicle" value="Car"> Kat Katori<br>
    <input type="checkbox" name="vehicle" value="Bike"> Padded<br>
  <input type="checkbox" name="vehicle" value="Car"> Halter Neck<br>
    <input type="checkbox" name="vehicle" value="Bike"> High Neck<br>
  <input type="checkbox" name="vehicle" value="Car"> Net Finishing<br>
    <input type="checkbox" name="vehicle" value="Bike"> Machine Work<br>
  <input type="checkbox" name="vehicle" value="Car"> Hand Work<br>
    <input type="checkbox" name="vehicle" value="Bike"> Piping Dori<br>
  <input type="checkbox" name="vehicle" value="Car"> Cut Work with Lining<br>
  <input type="checkbox" name="vehicle" value="Car"> Pattern<br>
  <input type="checkbox" name="vehicle" value="Car"> Designer<br>
   <input type="checkbox" name="vehicle" value="Car"> Spaghetti<br>
  
  <br>
  <h3>Salwar Kameez</h3>
  
   <input type="checkbox" name="vehicle" value="Bike"> Plain Dress<br>
  <input type="checkbox" name="vehicle" value="Car"> Dress With Lining<br>
    <input type="checkbox" name="vehicle" value="Bike"> Dress With Patterns<br>
  <input type="checkbox" name="vehicle" value="Car"> Anarkali<br>
    <input type="checkbox" name="vehicle" value="Bike"> Kurtis<br>
  <input type="checkbox" name="vehicle" value="Car"> Umbrella Dress<br>
  <input type="checkbox" name="vehicle" value="Car"> Chudidhar<br>
  <input type="checkbox" name="vehicle" value="Car"> Suits Plain Top<br>
  <input type="checkbox" name="vehicle" value="Car"> Kurta<br>
  <input type="checkbox" name="vehicle" value="Car"> Princess Suit<br>
  <input type="checkbox" name="vehicle" value="Car"> 6 Pc Cut<br>
  <input type="checkbox" name="vehicle" value="Car"> Chudi Pant<br>
  <input type="checkbox" name="vehicle" value="Car"> Pushback Pant<br>
  <input type="checkbox" name="vehicle" value="Car"> Patiayala Pant<br>
  <input type="checkbox" name="vehicle" value="Car"> Salwar Pant<br>
  <input type="checkbox" name="vehicle" value="Car"> Straight Pants<br>
  <input type="checkbox" name="vehicle" value="Car"> Cigarette Cut Pants<br>
  <br>
    <h3>Saree Works</h3>
  <input type="checkbox" name="vehicle" value="Car"> Saree Falls & Zig Zag<br>
   <input type="checkbox" name="vehicle" value="Bike"> Krosha Work to Sarees<br>
  <input type="checkbox" name="vehicle" value="Car"> Kuchu<br>
    <input type="checkbox" name="vehicle" value="Bike"> Hand Stone Kuchu<br>
  <input type="checkbox" name="vehicle" value="Car"> Saree Cut Work<br>
    <input type="checkbox" name="vehicle" value="Bike"> Petticoat Plain<br>
  <input type="checkbox" name="vehicle" value="Car"> Half Saree Stitching<br>
  <input type="checkbox" name="vehicle" value="Car"> Petticoat Fishtail Cut<br>
  <br>
  <h3>Ethnic</h3>
  <input type="checkbox" name="vehicle" value="Car"> Basic Dress<br>
  <input type="checkbox" name="vehicle" value="Car"> Lahenga Dress<br>
  <input type="checkbox" name="vehicle" value="Car"> Ghagra Choli <br>
  <input type="checkbox" name="vehicle" value="Car"> Lacha <br>
  <br>
   <h3>Western</h3>
  <input type="checkbox" name="vehicle" value="Car"> Frocks<br>
  <input type="checkbox" name="vehicle" value="Car"> Gowns<br>
  <input type="checkbox" name="vehicle" value="Car"> Skirts<br>
  <input type="checkbox" name="vehicle" value="Car"> Formal Pant<br>
  <input type="checkbox" name="vehicle" value="Car"> Formal Shirt<br>
  <input type="checkbox" name="vehicle" value="Car"> Women Sherwani<br>
  <br>
  
  <h3>Service Provider</h3>
    <input type="checkbox" name="vehicle" value="Car"> Female<br>
	 <input type="checkbox" name="vehicle" value="Car"> Male <br>
   
   
   <br>
    <header><h3>Shop Type</h3></header>
	 <input type="checkbox" name="vehicle" value="Car"> Designer<br>
	  <input type="checkbox" name="vehicle" value="Car"> Tailor<br>

    <!-- Your table -->
</div>
                                    <!--/.item-horizontal small-->
                                  
                                    <!--/.item-horizontal small-->
                                

							</div>

						<br><br>
					
                        <div class="sidebar-widgets-wrap nobottommargin ">

                            <div class="widget clearfix nobottommargin">

                                <h4 class=" list-group-item center"style="    background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow">Tailors of the week</h4>
                                <div id="oc-portfolio-sidebar" class="owl-carousel portfolio-5 " >

                                     <div class="oc-item">
                                        <div class="iportfolio">
                                            <div class="portfolio-image">
                                                <a href="#">
                                                    <img src="pics/img/e1.jpg" alt="Open Imagination">
                                                </a>
                                                <div class="portfolio-overlay">
                                                    <a href="pics/img/e1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc center nobottompadding">
                                               <p><a style="color:black" href="#"></a>Adam Basha</p>
                                              
                                            </div>
                                        </div>
                                    </div>

                                    <div class="oc-item">
                                        <div class="iportfolio">
                                            <div class="portfolio-image">
                                                <a href="portfolio-single.html">
                                                    <img src="pics/img/e2.jpg" alt="Open Imagination">
                                                </a>
                                                <div class="portfolio-overlay">
                                                    <a href="pics/img/e2.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc center nobottompadding">
                                                <p><a style="color:black" href="#">Nadeem Shah</a></p>
                                                
                                            </div>
                                        </div>
                                    </div>
										<div class="oc-item">
                                        <div class="iportfolio">
                                            <div class="portfolio-image">
                                                <a href="portfolio-single.html">
                                                    <img src="pics/img/e3.jpg" alt="Open Imagination">
                                                </a>
                                                <div class="portfolio-overlay">
                                                    <a href="pics/img/e4.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc center nobottompadding">
                                                <p><a style="color:black" href="portfolio-single.html">The Design Cue</a></p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script type="text/javascript">

                                    jQuery(document).ready(function($) {

                                        var ocClients = $("#oc-portfolio-sidebar");

                                        ocClients.owlCarousel({
                                            items: 1,
                                            margin: 10,
                                            loop: true,
                                            nav: false,
                                            autoplay: true,
                                            dots: false,
                                            autoplayHoverPause: true
                                        });

                                    });

                                </script>

                            </div>
						 
 <div class="notopmargin">

                                
 <div class="widget clearfix nobottommargin">
 
 

                                <h4 class="center list-group-item nobottommargin" style="    background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow">Femina</h4>
  
                                    <div class="tab-container notopmargin" style="background-color:white;   padding:5px">

                                        <div class="tab-content notopmargin" id="tabs-1">
                                            <div id="popular-post-list-sidebar">

                                                <div class="spost clearfix " style="padding-top:10px">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="img/7.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#" style="color:teal">Beautiful backless gowns from around the globe</a></h4>
                                                        </div>
                                                      
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="img/5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#"style="color:teal"> Red Carpet trends to wear now !</a></h4>
                                                        </div>
                                                         
                                                    </div>
                                                </div>

                                                <div class="spost clearfix" style="padding-bottom:10px">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="img/8.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#" style="color:teal"> What to wear on your wedding ?</a></h4>
                                                        </div>
                                                         
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                         

                                    </div>

                                </div>

                            </div>
							 
<div class="list-group topmargin-sm">
                                <h4 class="center list-group-item" style="    background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow">Elite Tailors</h4>
							   <div class="topmargin-sm"> <img src="img/4.jpg" alt="Open Imagination"> </div>
							    <div class="topmargin-sm"> <img src="img/5.jpg" alt="Open Imagination"> </div>
								 <div class="topmargin-sm"> <img src="img/8.jpg" alt="Open Imagination"> </div>
                            
</div>
                           
						    
<div class="list-group topmargin-sm">
                             
                            <a href="#" class="list-group-item center" style="    background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow">Tailor reviews</a>
                            <a href="#" class="list-group-item" style="background-color:white; font-weight:bold; color:black">Asha Tiwari, Delhi</a>
                            <a href="#" class="list-group-item " style="background-color:white; font-weight:bold; color:black">Atish Ghaste, Pune</a>
							 <a href="#" class="list-group-item" style="background-color:white; font-weight:bold; color:black">Saikat, Mumbai</a>
							  <a href="#" class="list-group-item" style="background-color:white; font-weight:bold; color:black">Rimzhim, Bangalore</a>
							   <a href="#" class="list-group-item" style="background-color:white; font-weight:bold; color:black">Ganesh , Chennai</a>
                        </div>
						
  <p  class="center topmargin-sm list-group-item" style="    background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow">OUR PICK FOR YOU</ps>
<div class="list-group  ">
                            <div class="list-group-item">
                                <h2 class="panel-title center" style="background-color:; font-weight:bold; color:#1ABC9C">Nameed Ahmed</h2>
                            </div>
                            <div class="panel-body " style="background-color:white;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, at, vitae, veritatis, temporibus soluta accusamus eum accusantium incidunt eius quisquam suscipit inventore neque. Distinctio, impedit.</p> <a href="#"><div class="center">www.oxfordcollege.com</a></div> 
                            </div>
                        </div>
						 
 
						  <a href="#" class="list-group-item center topmargin-sm" style="    background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow">OUR GOOD WORKS</a>
<div class="list-group notopmargin">
						<div class="fslider testimonial testimonial-full nobottommargin" data-animation="fade" data-arrows="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                     
                                    <div class="" style="font-size=14px">
                                        <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                        <div class="testi-meta center">
                                            Atulya S.
                                            <span>HSR Layout, Bangalore</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                     
                                    <div class="" style="font-size=14px"> 
                                        <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                        <div class="testi-meta center">
                                            Akshara S.
                                            <span>Indira Nagar, Bangalore</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                     
                                    <div class="">
                                        <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                        <div class="testi-meta center">
                                            Anshika S.
                                            <span>Koramangala, Bangalore</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="center">
                            
 </div>
 

                        </div>

                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark" style="bac">

      

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