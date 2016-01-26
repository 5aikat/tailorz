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


<style>
.outer-box{
  width:100%;
  min-height:200px;
  border:1px solid #dbcece;
  display: inline-block;
}
.inner-box-one{

  min-height:200px;
  float:left;
}
.inner-box-two{

  min-height:200px;
  border-left:1px solid #dbcece;
  border-right:1px solid #dbcece;
  float:left;
}
.inner-box-three{

  height:200px;
  float:left;

}
</style>
    <!-- Document Title
    ============================================= -->
	<title>User Dashboard </title>

</head>

<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="transparent-header page-section dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="one-page-menu">
                            <li class="current"><a href="#" data-href="#header"><div>Home</div></a></li>
                            <li><a href="#" data-href="#about"><div>About Us</div></a></li>
                            <li><a href="#" data-href="#choose"><div>Why Choose Us</div></a></li>
                            <li><a href="#" data-href="#packages"><div>Our Packages</div></a></li>
                            <li><a href="#" data-href="#book"><div>Book Now</div></a></li>
                            <li><a href="#" data-href="#contact"><div>Contact Us</div></a></li>
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->

      

        <!-- Content
        ============================================= -->

       <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                        
    
             

                        <div class="tabs side-tabs nobottommargin clearfix" id="tab-6">

                            <ul class="tab-nav tab-nav2 clearfix">
                                <li><a href="#tabs-21">Profile</a></li>
                                <li><a href="#tabs-22">Order History</a></li>
                                <li><a href="#tabs-23">Raise Issue</a></li>
                                <li class="hidden-phone"><a href="#tabs-24">FeedBack</a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="tabs-21">
                                   <!--Post Content-->
                                   <div class="row">
                                       <div class="col-md-6">
                                            <h4>Address</h4>
                                            <span ><a href="#">Add new Address</a></span>
                                        </div>
                                        <div class="col-md-6 tright">
                                            <br>
                                            <span class="tright"><a href="#">Edit</a></span>
                                        </div>
                                    </div>
                                    <hr>
                                   <div class="col_one_fourth" style="padding-left:2%;">

                                        <div class="row" >
                                           <label>Name:</label>
                                        </div>

                                        <div class="row" >
                                           <label>Mobile No:</label>
                                        </div>

                                        <div class="row" >
                                           <label>Address:</label>
                                        </div>
                                       
                                   </div>
                                    <div class="col_two_fifth ">
									<?php
										

									?>



									   
                                        <div class="row" >
                                        <label name="name">Surabhi W.</label></div>
                                        <div class="row" >
                                        <label class="mobile">+91 7798425637</label></div>
                                        <div class="row" >
                                        <label name="address">Flat No: 101<br> Mega City, FC Road,</label></div>
                                        
                                    </div>

                                    <div class="col_one_fourth col_last">
                                        <img src="">
                                    </div>
                                   <!--End Post Content-->
                                </div>
                                <div class="tab-content clearfix" id="tabs-22">
                                   <!--Table starts-->

                                     <table class="table">
                          <thead>
                            <tr>
                              <th>SR No.</th>
                              <th>Order ID</th>
                              <th>Total Item</th>
                              <th>Total Amount</th>
                              <th>Order Date</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>A001</td>
                              <td>2</td>
                              <td>2000</td>
                              <td>28/01/2016</td>
                              <td>Packed</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>A002</td>
                              <td>1</td>
                              <td>1000</td>
                              <td>28/01/2016</td>
                              <td>Packed</td>
                            </tr>
                            <tr  class="info">
                              <td></td>
                              <td></td>
                              <td>Total</td>
                              <td>3000</td>
                              <td>----</td>
                              <td>----</td>
                            </tr>
                          </tbody>
                        </table>

                                   <!--Table Ends-->
                                </div>
                    <div class="tab-content clearfix" id="tabs-23">

                                    <!--Raise issue-->

                                    
                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                            <div class="form-process"></div>


                            <div class="col_full">
                                <label for="template-contactform-email">Invoice No. <small>*</small></label>
                                <input type="text" id="template-contactform-email" name="invoice" value="" class="required email sm-form-control" />
                            </div>

                            <div class="form-process"></div>


                            <div class="col_full">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="raiseemail" value="" class="required email sm-form-control" />
                            </div>

                            <div class="clear"></div>


                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Issue Comment<small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="issuecomment" rows="3" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="commentissue" value="submit">Submit Issue</button>
                            </div>

                        </form>
                                    <!--Raise issue ends-->
                                    
                                </div>
                                <div class="tab-content clearfix" id="tabs-24">
                                        <!-- Postcontent
                    ============================================= -->
                    <div class="postcontent nobottommargin">

                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                            <div class="form-process"></div>


                            <div class="col_full">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="template-contactform-email" name="feedemail" value="" class="required email sm-form-control" />
                            </div>

                            <div class="clear"></div>


                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Feed Back Comment<small>*</small></label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="feedcomment" rows="3" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="feedsubmit" value="submit">SUBMIT</button>
                            </div>

                        </form>

                        <script type="text/javascript">

                            $("#template-contactform").validate({
                                submitHandler: function(form) {
                                    $('.form-process').fadeIn();
                                    $(form).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function() {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.sm-form-control').val('');
                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#contact-form-result'));
                                        }
                                    });
                                }
                            });

                        </script>

                    </div><!-- .postcontent end -->
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
	
		</section>
        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">



            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2016 All Rights Reserved by MyTrailorz<br>
                        <div class="copyright-links"><a href="#" style"color:#dadada">Developed By</a><a href="#"style="color:#dadada">Sands Zenith</a></div>
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

                        <i class="icon-envelope2"></i> info@denique.in <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-9986776888 <span class="middot">&middot;</span> <i class="icon-skype2"></i> DeniqueOnSkype
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
    <!-- External JavaScripts
    ============================================= -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script src="js/data.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      // Configure/customize these variables.
      var showChar = 30;  // How many characters are shown by default
      var ellipsestext = "...";
      var moretext = "Read More >";
      var lesstext = "...";


      $('.more').each(function() {
          var content = $(this).html();

          if(content.length > showChar) {

              var c = content.substr(0, showChar);
              var h = content.substr(showChar, content.length - showChar);

              var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

              $(this).html(html);
          }

      });

      $(".morelink").click(function(){
          if($(this).hasClass("less")) {
              $(this).removeClass("less");
              $(this).html(moretext);
          } else {
              $(this).addClass("less");
              $(this).html(lesstext);
          }
          $(this).parent().prev().toggle();
          $(this).prev().toggle();
          return false;
      });
    });

      $("#template-contactform").validate({
        submitHandler: function(form) {
          $('.form-process').fadeIn();
          $(form).ajaxSubmit({
            target: '#contact-form-result',
            success: function() {
              $('.form-process').fadeOut();
              $(form).find('.sm-form-control').val('');
              $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
              SEMICOLON.widget.notifications($('#contact-form-result'));
            }
          });
        }
      });

      $("#bookingForm").validate({
        submitHandler: function(form) {
          $('.form-process').fadeIn();
          $(form).ajaxSubmit({
            target: '#contact-form-result',
            success: function() {
              $('.form-process').fadeOut();
              $(form).find('.sm-form-control').val('');
              $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
              SEMICOLON.widget.notifications($('#contact-form-result'));
            }
          });
        }
      });
    </script>
</body>
</html>
