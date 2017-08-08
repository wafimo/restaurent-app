<?php  include 'menu.php';?>
<?php
        $filepath = realpath(dirname(__FILE__));
    	 include_once ($filepath.'/classes/CartClass.php');
     ?>
               
	<div class="cartpage">
	     <?php
		    $cart= new CartClass();
			 $renum;
         $date=date("dmy");
            $getCart = $cart->cartNumber();
  					if($getCart){
  						 $i=0;
  					foreach ($getCart as $data) {
  						 $i++;
						 $cren=$data['cren'];
						//echo  $renum=$date+;
						 
 echo $invoiceCode = 'My Company Logo'.date("y").mysql_insert_id() ;

echo mysql_insert_id();

					}
					}
         ?>

			    	<h2>Your Cart</h2>
					<input type="number" style="height:30px;width:200px;margin-left:100px;" value="<?phpecho $renum ?>" />
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
							<tr>
								<td>1</td>
								<td>Product Title</td>
								<td><img src="images/new-pic3.jpg" alt=""/></td>
								<td>Tk. 20000</td>
								<td>
									<form action="" method="post">
										<input type="number" name="" value="1"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td>Tk. 40000</td>
								<td><a href="">X</a></td>
							</tr>
							
							
							
							</table></div>