 <?php 
       $filepath = realpath(dirname(__FILE__));
       include_once ($filepath.'/classes/UserClass.php');
 ?>
 
 <?php
		$user = new User();
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
			$userRegi = $user->userRegistration($_POST);
		}
?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
       <!-- META TAG -->
       <meta charset="utf-8">
       <meta name="description" content="">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

       <!-- WEBSITE TITLE -->
       <title>The Daily Kitchen - HTML5 Responsive Restaurant Template</title>

       <!-- FAVICON -->
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
 <div class="section reservation-section" id="registration">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box col-md-6 col-md-offset-3">
                            <h1>Registration</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                           
                        </div><!-- end about caption -->
                    </div>
					<div>
					<div style="height:500px;">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1" >
						<?php
							if(isset($userRegi)){
								echo $userRegi;
							}?>
							<form action="" method="POST">
                            <form class="reservation-form row" id="reservation-form" action="" name="contactform" method="post" style="margin:auto;">
                                <div class="col-sm-12">
                                    <div class="form-group" >
                                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="NAME" required="required" >
                                        
                                    </div><!-- end of /.time group -->
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputPhoneNumber" name="InputPhoneNumber" placeholder="PHONE NUMBER" required="required">
                                      
                                    </div><!-- end of /.phone number group -->
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="InputEmail1" name="InputEmail1" placeholder="EMAIL" required="required">
                                        
                                    </div><!-- end of /.email group -->
                                </div>
								<div class="col-sm-12">
                                    <div class="form-group" style="margin:auto;">
                                        <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="PASSWORD" required="required" ></br>
                                        
                                    </div>
									<!-- end of /.time group -->

                                </div>
                               
                                <div class="col-sm-12">
                                    <div class="form-group" style="margin:auto;">
                                        <input type="text" class="form-control" id="InputAddress" name="InputAddress" placeholder="ADDRESS" required="required" >
                                       
                                    </div>
									<!-- end of /.time group -->

                                </div>
                                
                                
                                <div class="col-sm-12">
								<br>
								<br>
								<div class="padding">
								<input type="submit" name="register"  value="sumbit" class="vojon"/></div>
                                    
                                </div>
                            </form><!-- end of /.form -->
							</form>
                            <div id="alert"></div>
                        </div><!-- end of /.columns 6 -->

                    </div><!-- end of /.roe -->
					 <div class="link">
		 <h4>DO You Want to Login??</h4><a href="login.php"><h5>Login Here</h5> 
		 
		 </div>
					</div>
					<br>
					<br>
					<br>
					<br>
                </div><!-- end of /.container -->
				
            </div><!-- end of /.reservation swction -->
</div>
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
   <body>
   </html>
           <!-- End Navigation -->
