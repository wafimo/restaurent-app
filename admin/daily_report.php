<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php include 'classes/FoodClass.php';?>
<?php include 'classes/CartClass.php';?>





          <div class="grid_10">
		  <div style="width:100%;margin-left:0px;">
		  
			
			
			
			  <form action="" method="post">
          <h1>Search By invoice number</h1>
			  <br><input type="text" name="invoice" style="height:25px;width:150px;" />
			  <input type="submit" name="submit" value="submit"/>
              </form>
			  </div>
            <div class="box round first grid">
                <h2>record</h2>
                <div class="block">
        
			
                   
			
				<?php 
			$cart = new CartClass();
			$record=$cart->All_record();
			if($record){
				?>
				<table class="data display datatable" id="example">
					<thead>
						<tr>
							
							<th> Invoice no.</th>
							<th>UserName</th>
                           <th>TotalPrice</th>
                           <th>Date</th>
							 
							 <th>view Details</th>
						</tr>
					</thead>
					<tbody>
				<?php 
				 $i=0;
				 $sum=0;
					foreach ($record as $data) {
						
						 $i++;
            ?>
			             <?php   $sl=$i; ?>
							<?php  $invoice=$data['invoice_id']; ?>
                            <?php  $username=$data['user_id']; ?>
							<?php  $total=$data['food_price']; ?>
							<?php  $datee=$data['date']; ?>
							<?php  $name=$data['userName'];?>
						
			  <tr class="odd gradeX" style="text-align:center;">
						
							
							<td><?php echo $invoice; ?></td>
                           <td> <?php echo $username; ?></td>
							<td><?php echo $total; ?></td>
							<td><?php echo $datee; ?></td>
							 
						
							<td><a href="details.php?cart_id=<?php echo $data['invoice_id']; ?>" data-toggle="modal" data-target="#myModal">View</a></td>
						
						</tr>
					
						
            <?php } 
			
			
			
			}?>
			
			         <tr class="odd gradeX" style="text-align:center;">
							
							<td><?php  @$invoice; ?></td>
                            <td><?php  @$name; ?></td>
							<td><?php  @$sum ."TK";?></td>
							<td><?php @$datee; ?></td>
							
						
					
			
		
			
			
			</tbody>
				</table>
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
