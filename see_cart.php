  <?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/classes/session.php');
  Session::checkSession("userId");
  ?> 
<div class="section team-section" id="cart">
                <div class="container" >
                    <div class="row">
<?php
        $filepath = realpath(dirname(__FILE__));
    	 include_once ($filepath.'/classes/CartClass.php');
     ?>
	

	<div class="section team-section" id="cart">
                <div class="container" >
                    <div class="row">
<?php
        $filepath = realpath(dirname(__FILE__));
    	 include_once ($filepath.'/classes/CartClass.php');
     ?>

							
	<div class="cartpage" style="height:1200px;">
	     <?php
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
						  
						  //echo substr("$cren",6);
						// $cren=$data['cren'];
						 $cren=$data['invoice'];

						 $increment=substr("$cren",8);
					
						    $renum=$date.($increment+1);
						   
							   $invoice= "DC".$renum ;
                               $_SESSION['invoice']=$invoice;
         ?>

			<h2 style="color:white;">Your Cart</h2>
			<input type="text" style="height:30px;width:200px;margin-left:100px; color:black;" value="<?php  echo $renum ?>" />
			<?php } } ?>
			
			<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        @$cart_tbl_id   = $_POST['cart_tbl_id'];
        @$quantity = $_POST['quantity'];
      // Method For Update data in cart table
        $updateCart  = $cart->updateCart($cart_tbl_id,$quantity);
        if($quantity<=0){
          $delProduct = $cart->delFoodByCart($cart_tbl_id);
        }
		
		
   }
?>
      <?php
if(isset($_GET['delFood'])){
    $delId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delFood']);
    $delProduct = $cart->delFoodByCart($delId);
}
?>

   
<?php 
           if(isset($updateCart)){
			   echo $updateCart;
		   }



?>


   <?php
                /*if (!isset($_GET['id'])) {
                    echo "<meta http-equiv='refresh' content='0;URL=?id=live' />";
                }*/
          ?>
              <div>
              <table class="tblone">
							<tr>
							    <th width="5%">SL</th>
								<th width="40%">Product Name</th>
								<th width="10%">Image</th>
								<th width="15%">Price</th>
								<th width="15%">Quantity</th>
								<th width="10%">Total Price</th>
								<th width="10%">Action</th>
							</tr>
              <?php
			   $invoice = $_SESSION['invoice'];
			   
			   $userID = Session::get("userId");
               $getFood = $cart->getCartFood($userID );
              if($getFood){
                $i = 0;
                $sum = 0;
                $quantity = 0;
				$sum_quantity=0;
                foreach ($getFood as $data){
                  $i++;
              ?>
							<tr>
  								<td><?php echo $i; ?></td>
  								<td><?php echo $data['foodName']; ?></td>
									<td><?php echo $data['foodNameId']; ?></td>
  								<td><img src="admin/<?php echo $data['image']; ?>" alt=""/></td>
  								<td>Tk.<?php echo $data['price']; ?></td>
                  <td>
    				<form action="" method="POST">
             <input type="hidden" name="cart_tbl_id" value="<?php echo $data['cart_tbl_id']; ?>"/>
             <input type="number" name="quantity" value="<?php echo $data['quantity']; ?>"/>
    		 <input type="submit" name="submit" value="Update"/>
    				</form>
  								</td>
                  <td>Tk.<?php
                            $total =  $data['price'] * $data['quantity'];
                            echo $total;
                          ?>
                  </td>
  								<td><a onclick="return confirm('Are u sure to delete??');" href="?delFood=<?php echo $data['cart_tbl_id']; ?>">X</a></td>
							</tr>
                   <?php
               
                $sum = $total + $sum;
				$quantity = $data['quantity']+$quantity;
                //Session::set("quantity", $quantity);
               //Session::set("sum", $sum);
              ?>
					
                           <?php } } ?>
						   
							</table>
					<?php
					$invoice = $_SESSION['invoice'];
					$userID = Session::get("userId");
                 $getData = $cart->getCartData($userID);
                   if($getData){
             ?>
             <table style="float:right;text-align:left;margin-right:200px;color:white;">
							<tr>
								<th>Sub Total : </th>
								<td>TK. <?php echo $sum ;  ?>
                                </td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10%</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td>TK.
								<?php
                         $vat = $sum * 0.1;
                         $grandTotal = $sum + $vat;
                         echo $grandTotal;
						 $_SESSION['grandTotal']=$grandTotal;
					      
						  //$quantity_sum=$data['quantity'];+$quantity;
                       ?>
                </td>
							</tr>
							
							<tr>
								<th>Quantity : </th>
								<td> <?php echo $quantity;?></td>
							</tr>
							
							
							
						
					   </table>
					        
					   
             <?php }else {
				  echo '<h1 style="text-align:center;color:white;">You Have Not Selected Any Desh</h1>';
               //header("Location:index.php");
               //echo "Empty Cart!! Plz Buy Now.";
             }?>		
						
				</div>
				<?php         if($_SERVER['REQUEST_METHOD'] == 'POST'){
								$cart= new CartClass();
								$userID = Session::get("userId");
							    $invoice = $_SESSION['invoice'];
								$grandTotal = $_SESSION['grandTotal'];
							    $quantity;
								$submitProduct = $cart->submitTotal($userID,$invoice);
							    //$submittotal = $cart->submitTotalByCart($userID,$invoice,$grandTotal,$quantity);
							 $delData = $cart->deleteCustomerCart($userID);
							}?>
	
	 
	                                <form action="" method="post">
										
										<input type="submit" name="submit" value="submit"/>
									</form>
				

<?php include 'link.php';?>