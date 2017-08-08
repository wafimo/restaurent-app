<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php include 'classes/FoodClass.php';?>
<?php include 'classes/CartClass.php';?>
		
		
		
		
		<?php
  $order_details= new CartClass();

  if(isset($_GET['cart_id'])){
    $id = $_GET['cart_id'];
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['cart_id']);
    
    $cartid = $order_details->details($id);
  }?>
  <div class="box round first grid">
                <h2>record</h2>
                <div class="block">
				
				
				
				
				
				
 <?php $all=$order_details->details($id);
 
  if($all){
	  ?>  
				<table style="width:56%;">
					<thead>
						<tr>
							
						   <th> Invoice no.</th>
						   <th>UserName</th>
                           <th>foodName</th>
                           <th>price</th>
						   <th>Quantity</th>
						   
							 <th>image</th>
						</tr>
					</thead>
					<tbody>
				<?php 
				 $i=0;
				 $sum=0;
				 $quantityy=0;
	  foreach ($all as $data) {
						 $i++;
            ?>
			
						   <tr class="odd gradeX" style="text-align:center;">
						
							<td><?php echo $invoice=$data['invoice_id']; ?></td>
                            <td><?php echo $user=$data['userName']; ?></td>
							<td><?php echo $data['food_name']; ?></td>
							<td><?php echo $total=$data['food_price']; ?></td>
							<td><?php echo $quantity=$data['food_quantity']; ?></td>
							<td><img src="<?php echo $data['food_image']; ?>" height="40px" width="60px"/></td>
							
						</tr>
						
						     <?php 
							
						       $sum= $total+$sum;
							 
						      $quantityy=$quantity+$quantityy;
							  
							  ?>
            <?php } }?>
			
							
						       
	  
  </tbody>
 
				</table>
				<div style="width:75%;;background:black;">
				
				<h2>invoice Number : <?php echo $invoice;?></h2>
				<h2>   Total Price :    <?php echo $sum."TK";?></h2>
				<h2>Total Quantity :<?php echo $quantityy;?></h2>
				<h2>Print Invoice</h2>
				</div>

 
</div>

</div>

 
	<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<?php include 'inc/footer.php';?>	
          
        