  <?php
    $filepath = realpath(dirname(__FILE__));

    include_once ($filepath.'/classes/CartClass.php');
?>
  <?php
 $cart= new CartClass();

  ?>

  <?php  include 'menu.php';?>

  <?php
    if (!isset($_GET['foodid']) || $_GET['foodid'] == NULL){
      echo "<script>window.location = '404.php';</script>";
    }else{
      $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['foodid']);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
          $quantity = $_POST['quantity'];
          // Method For insert data in catr table
          $addCart  = $cart->addToCart($quantity,$id);
       }
?>

 <div class="section menu-section" id="menu">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Food Details</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>

                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->

			<?php
        $filepath = realpath(dirname(__FILE__));
    	 include_once ($filepath.'/classes/SubClass.php');
     ?>

	   <?php
	       $foodType= new food();
         if(isset($_GET['food_id'])){
           $id = $_GET['food_id'];
           $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['food_id']);

             $foodInfo  = $foodType->foodInfo($id);
         }
      ?>


<div class="main">
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
					<div class="grid images_3_of_2" style="width:100%;margin-left:450px;" >
						<img src="admin/<?php echo $data['f_image']; ?>"  width="auto" height="270"  alt="" />
					</div>
				<div class="desc span_3_of_2" style="text-align:center;" >
                <h2 style="height:50px;width:100%;font-size:30px;color: #c59b5f none repeat scroll 0 0;"><b style="color:#c59b5f" >Food Name:<?php echo $data['f_name']; ?></b></h2>
					<div class="price" >
					<h2><b style="color:#c59b5f;text-align:center;">Price: <span>Tk.<?php echo $data['f_price']; ?></span></b></h2>
					</div>
				     <div class="add-cart">
					<form action="" method="post">
						<input type="number" class="buyfield" name="quantity" value="1" style="height:30px;width:170px;"/>
						<input type="submit" class="buysubmit" name="submit" value="Buy Now" style="color:red;"/>
					</form>
				</div>
       <div class="product-desc" style="text-align:center;">

			<h2 style="height:50px;"><b style="color:#c59b5f">Food Details</b></h2>
			<h3 style="color:#c59b5f;width:100%;"><?php echo $data['f_details']; ?></h3>
	    </div>
			</div>

         <?php } } ?>




	    </div>

 		</div>
 	</div>
</div>
