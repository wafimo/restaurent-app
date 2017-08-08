<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php
  $food_insert= new food();

  if(isset($_GET['del_food'])){
    $id = $_GET['del_food'];
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del_food']);
    
    $del_food = $food_insert->delFoodById($id);
  }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Food Shedule List</h2>
                <div class="block">
                  <?php
                    
                      if(isset($del_food)){
                        echo $del_food;
                      }
                  ?>
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Schedule Name</th>
							
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            <?php
            
              $getFood = $food_insert->getAllFoodTime();
					if($getFood){
						 $i=0;
					foreach ($getFood as $data) {
						 $i++;
            ?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $data['f_name']; ?></td>
							
							<td><a href="food_schedule_edit.php?food_id=<?php echo $data['food_id']; ?>">Edit</a> || <a onclick="return confirm('Are u sure to delete!')" href="?del_food=<?php echo $data['food_id']; ?>">Delete</a></td>
						</tr>
            <?php } }?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>
