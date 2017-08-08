  
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
   
<div class="section about-section" id="about">
              


			   <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>About Us</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end about caption -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-content">
                                <h3>WHO WE ARE</h3>
                                <p>Sed mauris massa, rutrum eget dignissim in, maximus non mauris. Maecenas vestibulum blandit mauris. Sed mauris massa, rutrum eget dignissim in. Maximus non mauris. Maecenas vestibulum blandit mauris, quis cursus ex aliquam vitae. Fusce iaculis, sem eu facilisis fermentum, quam ligula consectetur sem, et feugiat ligula eros a erat. Aliquam id bibendum nibh, quis pretium nulla. Maximus non mauris. Maecenas vestibulum blandit mauris, quis cursus ex aliquam vitae. Fusce iaculis, sem eu facilisis fermentum, quam ligula consectetur sem, et feugiat ligula eros a erat. Aliquam id bibendum nibh, quis pretium nulla et.</p>
                                <a href="#" class="vojon-btn">Resever Now </a>
                                <a href="#" class="vojon-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-thumb">
                                <img src="images/chef-2.png" class="img-responsive" width="360" height="427" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- end of /.container -->
				<script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- BOOTSTRAP -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- PRETTYPHOTO -->
        <script src="js/jquery.prettyPhoto.js"></script>
        <!-- OWL -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- ISOTOPE -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- PLACEHOLDEM -->
        <script src="js/placeholdem.min.js"></script>
        <!-- PARALLAX -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- COUNTER UP -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- WAYPOINTS -->
        <script src="js/waypoints.min.js"></script>
        <!-- SMOTHSCROLL -->
        <script src="js/smoothscroll.min.js"></script>
        <!-- BOOTSNAV -->
        <script src="js/bootsnav.js"></script>
        <!-- GOOGLE MAP -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>  
        <!-- CUSTOM JS -->
        <script src="js/custom.js"></script>
        <!-- MAP -->
        <script src="js/map.js"></script>
            </div><!-- end of /.about section -->
