<?php
      $filepath = realpath(dirname(__FILE__));
      include_once ($filepath.'/classes/UserClass.php');
    //include_once ($filepath.'/classes/session.php');
    Session::checkLogin("userId");
?>


   <?php
   $user = new User();
   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
     $userLogin = 	$user->userLogin($_POST);
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
<div class="section reservation-section" id="reservation">
               <div class="container" style="height:600px;">
                   <div class="row">
                       <div class="section-title-box col-md-6 col-md-offset-3">
                           <h1>Login</h1>
                           <span class="title-divider">
                               <i class="fa fa-cutlery" aria-hidden="true"></i>
                           </span>

                       </div><!-- end about caption -->
                   </div>
         <div>
                   <div class="row">
                       <div class="col-md-10 col-md-offset-1" >
           <?php
             if(isset($userLogin)){
           echo $userLogin;
             }
           ?>
           <?php
           /*$user = new User();
           if($_SERVER['REQUEST_METHOD'] == 'POST'){

             $email   = $_POST['InputEmail1'];

             $getUser = $user->getuserdata($email);
                 if($getUser){
                    foreach ($getUser as $data){
                    $userID = $data['userId'];
                               //$_SESSION['userID'] = $userID;
               $_SESSION['invoice'] = $userID;
           }}}*/
           ?>
             <form action="" method="POST">
                           <form class="reservation-form row" id="reservation-form" action="" name="contactform" method="post" style="margin:auto;">

                               <div class="col-sm-12">
                                   <div class="form-group">
                                       <input type="email" class="form-control" id="InputEmail1" name="InputEmail1" placeholder="EMAIL" required="required">
                                      
                                   </div><!-- end of /.email group -->
                               </div>
               <div class="col-sm-12">
			   </br>
			   
                                   <div class="form-group" style="margin:auto;">
                                       <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="PASSWORD" required="required" >
                                       
                                   </div>
                 <!-- end of /.time group -->

                               </div>
                              
                               <div class="col-sm-12">
                                 <br>
                                 <br>
								  <div class="padding">
                                   <input type="submit" name="login"  value="LogIN" class="vojon"/>
                               </div>
							   
							     </div>
                           </form><!-- end of /.form -->
             </form>
                           <div id="alert"></div>
                       </div><!-- end of /.columns 6 -->
                   </div><!-- end of /.roe -->
         </div>
         <br>
         <br>
         <br>
         <br>
		 <div class="link">
		 <h4>Are you not registerd??</h4><a href="registration.php"><h5>Registration Here</h5> 
		 
		 </div>
               </div><!-- end of /.container -->
           </div><!-- end of /.reservation swction -->
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
