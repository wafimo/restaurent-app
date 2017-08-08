<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php include 'classes/FoodClass.php';?>
<?php
  $food = new Fooddd();

  if(isset($_GET['del_food'])){
    $id = $_GET['del_food'];
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['del_food']);

    $del_food = $food->delFoodById($id);
  }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Food List</h2>
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
							<th> Name</th>
							<th>Image</th>
              <th>Price</th>
              <th>Description</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
            <?php
              $getFood = $food->getAllFood();
					if($getFood){
						 $i=0;
					foreach ($getFood as $data) {
						 $i++;
            ?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $data['f_name']; ?></td>
              <td><img src="<?php echo $data['f_image']; ?>" height="40px" width="60px" /></td>
							<td><?php echo $data['f_price']; ?></td>
							<td><?php echo $data['f_details']; ?></td>
							<td><a href="food_edit.php?food_id=<?php echo $data['f_name_id']; ?>">Edit</a> || <a onclick="return confirm('Are u sure to delete!')" href="?del_food=<?php echo $data['f_name_id']; ?>">Delete</a></td>
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
