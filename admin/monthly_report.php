  <?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php include 'classes/FoodClass.php';?>
<?php include 'classes/CartClass.php';?>

<?php
  $food = new food();

  if(isset($_POST['submit'])){

	$report = $food->Report($_POST);
	var_dump($_POST);
}
?>


 <?php

                      if(isset($report)){
                        print_r($report);
                      }
                  ?>
         <form action="monthly_report.php" method="post">
  
  
    From:<input type="Date" name="fromdate" placeholder="Enter date" />
           To:<input type="Date"  name="todate" placeholder="Enter date"/>
			<input type="submit" name="submit" value="submit"/>
            
            </form>
			
			 <?php
              $getcart =  $food->Report();
					if($getcart){
						 $i=0;
					foreach ($getcart as $data) {
						 $i++;
            ?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $data['cart_id']; ?></td>
                            <td><?php echo $data['userName']; ?></td>
							<td><?php echo $data['total_price']; ?></td>
							<td><?php echo $data['date']; ?></td>
							
						</tr>
            <?php } }?>
			<?php include 'inc/footer.php';?>