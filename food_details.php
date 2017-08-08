  
  
  
  <?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/classes/session.php');
  Session::checkSession("userId");
  ?>
  <?php  //session_start(); ?>
 <?php  //include 'update_menu.php';?>
  <?php
    $filepath = realpath(dirname(__FILE__));

    include_once ($filepath.'/classes/CartClass.php');
?>
<?php
        $filepath = realpath(dirname(__FILE__));
    	 include_once ($filepath.'/classes/SubClass.php');
     ?>
	 <?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/UserClass.php');

						?>
  <?php

 $cart= new CartClass();
 $foodType= new food();
  ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- META TAG -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <!-- WEBSITE TITLE -->
        <title>The Daily Kitchen</title>

        <!-- FAVICON -->
        <link rel="icon" href="images/favicon.png">
        <link rel="icon" href="images/favicon.png" sizes="57x57">
        <link rel="icon" href="images/favicon.png" sizes="72x72">
        <link rel="icon" href="images/favicon.png" sizes="114x114">
        <link rel="icon" href="images/favicon.png" sizes="144x144">

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
	<script type="text/javascript">
var argument;
$(document).ready(
//var argument;
function myFunction() {
	//$('#output').html();

	    $.ajax({
		url:"classes/SubClass.php",
		//data:argument,
        data:{argument: ""},
		type: "POST",
		success:function(data){$('#output').html(data);}
		//success:function(data){$('#outputt').html(data="");}
	});});
</script>
	<script type="text/javascript">

function load_all(load) {
	//$('#output').html();

	$.ajax({
		  url:"classes/SubClass.php",
		  method:"POST",
		  data:'load='+load,
		  dataType:"text",

		success:function(data){$('#output').html(data);}
	});
}


</script>

    <body>

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
                            <li class="active"><a href="#home">HOME</a></li>
                            <li><a href="#about">ABOUT</a></li>
                           
                            <li><a href="#menu">MENU</a></li>
                            <li><a href="#staff">STAFF </a></li>
                            <li><a href="#contact">CONTACT</a></li>
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


  <?php
  //for session
  //for session
                           /*$user = new User();
						   if($_SERVER['REQUEST_METHOD'] == 'POST'){
						   $getUser = $user->getuserdata($_POST);}
  					      if(isset($getUser)){
  				        	 foreach ($getUser as $data){
						         $userID = $data['userId'];
                                $_SESSION['userID'] = $userID;
								//$_SESSION['invoice'] = $userID;
						  }}*/

		    $cart= new CartClass();
			 $renum;
         $date=date("dmy");
            $getCart = $cart->cartNumber();
  					if($getCart){
  						 $i=0;
						 $renum;
						 //while ($data=$getCart->fetch_assoc()){
  				         foreach ($getCart as $data){
  						 $i++;
						$cren=$data['invoice'];
						
						 $increment=substr("$cren",8);
						
						    $renum=$date.($increment+1);
						   
							  $invoice= "DC".$renum ;
                               $_SESSION['invoice']=$invoice;

							 }	 }

    if (!isset($_GET['foodid']) || $_GET['foodid'] == NULL){
      echo "<script>window.location = '404.php';</script>";
    }else{
      $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['foodid']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $quantity = $_POST['quantity'];
		  $invoice = $_SESSION['invoice'];
		  $userID = Session::get("userId");
		  //$userID = $_SESSION['userID'];
		  //$userID = $_SESSION['invoice'];
          // Method For insert data in catr table
          $addCart  = $cart->addToCart($quantity,$id,$invoice,$userID);
       }
?>

 <div class="section menu-section" id="menu.php">
                <div class="container">
                    <div class="row">
					<?php
              if(isset($addCart)){?>

				 <script> location.replace("cart.php"); </script> <?php
              }else{
          //header("Location:404.php");
       }
           ?>
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                           <h2 style="color:white">food details</h2>
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>

                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->



	   <?php
	       $foodType= new food();
         if(isset($_GET['food_id'])){
           $id = $_GET['food_id'];
           $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['food_id']);

             $foodInfo  = $foodType->foodInfo($id);
         }
      ?>
 

<div class="container">
<div class="main">
 <?php echo $sessionId = session_id();?>
    <div class="content">
        <div class="section group">
			<div class="cont-desc span_1_of_2">
          <?php
           // Method for Show single data details from different table
            $getFood = $foodType->getSingleFood($id);
					if($getFood){
						 $i=0;
					foreach ($getFood as $data) {
						 $i++;
          ?>
					<div class="grid images_3_of_2" style="margin-left:400px;width:100%" >
						<img src="admin/<?php echo $data['f_image']; ?>"  width="auto" height="270"  alt="" />
					</div>
				<div class="desc span_3_of_2" style="text-align:center;" >
                <h2 style="height:50px;width:30%;font-size:30px;color: #c59b5f none repeat scroll 0 0;margin-left:350px;"><b style="color:#c59b5f" >Food Name:<?php echo $data['f_name']; ?></b></h2>
					<div class="price" >
					<h2><b style="color:#c59b5f;text-align:center;">Price: <span>Tk.<?php echo $data['f_price']; ?></span></b></h2>
					</div>
				     <div class="add-cart">
					<form action="" method="POST">
						<input type="number" class="buyfield" name="quantity" value="1" style="height:30px;width:170px;"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now" />


				</div>
       <div class="product-desc">

			<h2 style="height:50px;width:200px;margin-left:380px;"><b style="color:#c59b5f">Food Details</b></h2>
			<h3 style="color:#c59b5f;width:100%;"><?php echo $data['f_details']; ?></h3>
	    </div>
			</div>

         <?php } } ?>




	    </div>

 		</div>
 	</div>
</div>
<h2 style="background:black;color:#c59b5f;height:20px;text-align:center;">Related Deshes</h2>
<div class="section group">

			<div id="output"></div>
			</div>
			      </div>
			             <div class="cl-sm-12 load-more-btn">



							<input type="button" name="load" class="vojon" value="LoadAll"onClick="load_all(load);" />
                        </div>

						</form>

			  <!-- JQUERY -->
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

    </body>
</html>
