<?php
session_start();

require "config.php"; // Database Connection
$id=$_SESSION['Vid'];
if(isset($_GET['submit']))
{	
		$id=$_SESSION['Vid'];
		
		$sub=$_GET['sel2'];
		$price=$_GET['price'];
		$sql2=$dbo->prepare("select * from subcateg Where  subcategDesc='".$sub."'");
					$sql2->execute();
					$row2=$sql2->fetch();
					$subid=$row2['SubCategId'];
					//echo $subid;
	  try{       
				$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					  // use exec() because no results are returned
				
				$sql="INSERT INTO RATECHART (VNDRID,SUBCATEGID,PRICE)
					VALUES ('$id','$subid',$price);";

				$dbo->exec($sql);
		
				echo"Inserted";
			
	  }
	  catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
				$dbo=null;
			
			}

}
else{
}



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
<section>

            <div class="content-wrap">

                <div class="container clearfix">
				 <form action="#" method="get">
               <div class="col_one_third">
									<label for="template-contactform-service">Category</label>
								<select id="sel1" name="sel1" onchange="populate(this.id,'sel2')" class="sm-form-control">
									<option value="">Select</option>
    <option value="cc1">Blouses</option>
    <option value="cc2">Salwar Kameez</option>
    <option value="cc3">Ethnic</option>
    <option value="cc4">Saree Works</option>
    <option value="cc5">Western</option>
	</select>
							</div>   

 <div class="col_one_third">
									<label for="template-contactform-service">Sub Category</label>
								<select id="sel2" name="sel2" class="sm-form-control">
    <option value="">Select Sub Item</option>

</select>
							</div> 	
							
							<div class="col_one_third col_last">
								<label for="template-contactform-name">Price</label>
								<input type="text" id="price" name="price" value="" class="sm-form-control" placeholder="" />
							</div>
 <div class="center">
 
 <button name="submit" type="submit"  tabindex="5" value="Submit" class="button button-3d nomargin">ADD</button>
							
 
 </div>
 
 
 <div class="postcontent topmargin-lg  nobottommargin clearfix">
 	<table class="table table-striped">
						  <thead>
							<tr>
							  <th>Sr No</th>
							  <th>Sub Categories</th>
							  <th>Price</th>
							</tr>
						  </thead>
						  <tbody>
							 <?php 
          
					if(isset($_SESSION['Vid'])){
					require "config.php"; // Database Connection

					$i=1;
					$sql="SELECT * FROM ratechart WHERE VndrId='".$_SESSION['Vid']."'"; 
					
					foreach ($dbo->query($sql) as $row){
					$sql1=$dbo->prepare("select * from subcateg Where  SubCategId='".$row['SubCategId']."'");
					$sql1->execute();
					$row1=$sql1->fetch();
				
                        
                    ?>
                        <tr> 
							<td><?php echo $i++; ?></td>
							<td><?php echo $row1['subcategDesc'] ?></td>
							<td>Rs<?php echo $row['Price'] ?></td> 
                         </tr> 
                    
                     <?php     
                    } 
				}
			?>


						</table>
 </div>

 



   
					


					<!-- Post Content
                    ============================================= -->
					
      
</div>	  </div>

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
	<script type="text/javascript">



function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value == "cc1"){
        var optionArray = ["|","Plain Blouse|Plain Blouse","Lining Blouse|Lining Blouse","Princess Cut|Princess Cut","Katori|Katori","Paded|Paded","Halter Neck|Halter Neck","High Neck|High Neck","Net Blouses|Net Blouses","Machine Work|Machine Work","Hand Work|Hand Work","Piping Dori|Piping Dori","Machine Work|Machine Work","Cut Work With Lining|Cut Work With Lining","Pattern Blouse|Pattern Blouse","Designer Blouse|Designer Blouse","Speggty Blouse|Speggty Blouse"];
    } else if(s1.value == "cc2"){
        var optionArray = ["|","Plain Dress|Plain Dress","Dress With Lining|Dress With Lining","Dress With Patterns|Dress With Patterns","Anarkali|Anarkali","Umbrella Dress|Umbrella Dress","Chudidhar|Chudidhar","Suits Plain Top|Suits Plain Top","Kurta|Kurta","Princess Suit|Princess Suit","6 Pc Cut|6 Pc Cut","Chudi Pant|Chudi Pant","Pushback Pant|Pushback Pant","cc12|Patiyala pant","Salwar Pant|Salwar Pant","Straight Paints|Straight Paints","Cigarette Cut Pants|Cigarette Cut Pants"];
    } else if(s1.value == "cc3"){
        var optionArray = ["|","Basic Dress|Basic Dress","Lehanga|Lehanga","Ghagra Choli|Ghagra Choli","Lacha|Lacha"];
    }
      else if(s1.value == "cc4"){
        var optionArray = ["|","Saree Fall & Zig Zag|Saree Fall & Zig Zag","Krosha Work to Sarees|Krosha Work to Sarees","Kucha|Kucha","Hand Stone Kuchu|Hand Stone Kuchu","Saree Cut Work|Saree Cut Works","Half Saree Stitching|Half Saree Stitching","Peticoat Plain|Peticoat Plain","Petticoat Fish Tail Cut|Petticoat Fish Tail Cut"];
    }
      else if(s1.value == "cc5"){
        var optionArray = ["|","Frok|Frok","Gowns|Gowns","Skirts|Skirts","Formal Pant|Formal Pant","Formal Shirt|Formal Shirt","Women Shervani|Women Shervani"];
    }
    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
</script>



</body>
</html>