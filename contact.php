   
  <?php $filepath = realpath(dirname(__FILE__));
      include_once ($filepath.'/classes/session.php');?>
 <!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- META TAG -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <!-- WEBSITE TITLE -->
        <title>The Daily Kitchen</title>

        <!-- 1 -->
        <link rel="icon" href="images/1.jpg">
        <link rel="icon" href="images/1.jpg" sizes="57x57">
        <link rel="icon" href="images/1.jpg" sizes="72x72">
        <link rel="icon" href="images/1.jpg" sizes="114x114">
        <link rel="icon" href="images/1.jpg" sizes="144x144">

        <!--YOUR STYLE -->
        <link rel="stylesheet" href="css/style.css">

        <!-- SKINS THEME -->
        <link href="#" rel="stylesheet" media="screen" class="skin">
        <!-- Example -->
        <!--<link href="css/skin/blue.css" rel="stylesheet" media="screen" class="skin">  -->

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>

    <body>

	<!--For Log_out -->

<div id="preloader">
            <div id="loader-wrapper">
                <div class="cssload-loader">The<span>Daily</span>Kitchen</div>
            </div>
        </div>

        <div class="wrapper">
            <!-- Start Navigation -->
            <nav class="navigation-section navbar navbar-default bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         <a class="navbar-brand" href="index.html">The Daily Kitchen</a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                   <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right" id="top-menu">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                       
                            <li><a href="update_main_menu.php">MENU</a></li>
                            <li><a href="update_staff.php">STAFF </a></li>
                            <li><a href="contact.php">CONTACT</a></li>
							
							<?php 
							$msg=Session::get("userId");
							if($msg){?>
							 <li><a href="cart.php">CART</a></li>
							<li><a href="logout.php" >logout</a></li>
							
							
							
							
							<?php  } 
							else {
								?>
								<li><a href="login.php">login</a></li>
						<?php 	}?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
   
   <div class="section contact-section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box col-md-6 col-md-offset-3">
                            <h1>Contact Us</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 address-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Porgit Labora, Main Dal St, Rober. <br>Ahner 4706 N Leavitt St Chicago,</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-phone"></i>
                                <span>(123) 456-7890<br>(123) 456-7890</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-clock-o"></i>
                                        <span>Saturday - Tuesday 08:00 - 23:59</span>
                                        <span>Wednesday - Friday 10:00 - 22:00</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of /.address box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 contact-box">
                            <form class="row" id="contact-form" action="inc/contact.php" name="contactform" method="post" >
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea name="comments" class="form-control" id="comments" placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="vojon-btn message-btn contact-submit" id="submit">Send Message</button>
                                </div>
                            </form><!-- end form -->
                            <div id="message"></div>

                        </div><!-- end of /.column anf contact -->
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.contact section -->
 <div id="map"></div><!-- end of /.map -->
 <div class="row">
                        <div class="col-md-12 social-item">
                            <div class="top-btn">
                                <a class="top-button " href="#" id="easy-top" >
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="footer-social-box">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div><!-- end of /.footer social media-->
                        </div><!-- end of /. column 12 -->
                    </div>
                    <div class="row">
                        <div class="col-md-12 copyright">
                            <p>Made with <i class="fa fa-heart"></i> by <a href="https://revolthemes.net/" target="_blank">Revolthemes</a>. All Rights Reserved</p>
                        </div><!-- end column -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </div><!-- end of /.footer section -->
        </div><!-- END OF /. WRAPPER -->
<?php include 'link.php';?>