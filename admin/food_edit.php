<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php include 'classes/FoodClass.php';?>
<?php
  $food = new Fooddd();

if (!isset($_GET['food_id']) || $_GET['food_id'] == NULL){
  echo "<script>window.location = 'staff_list.php';</script>";
}else{
  $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['food_id']);
}


  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])){

      $updateFood  = $food->foodUpdate($_POST,$id,$_FILES);
   }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Food</h2>
               <div class="block copyblock">
                 <?php
                     if(isset($updateFood)){
                       echo $updateFood;
                     }
                 ?>
                 <?php

                    $getFood = $food->getFoodById($id);
	                 if($getFood){
                     //foreach($getStaff as $result){

                 ?>
                 <form  Action ="" method="POST" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
						                <td>
                                <label>Food Name</label>
                            </td>
                            <td>
                                <input type="text" name="f_name" value="<?php echo $getFood->f_name;?>" placeholder="Enter Staff name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
						                <td>
                               <label>Description</label>
                            </td>
                            <td>
                                <input type="text" name="f_details" value="<?php echo $getFood->f_details;?>" class="medium" />
                            </td>
                        </tr>

					             	<tr>
						                <td>
                               <label>Price</label>
                            </td>
                            <td>
                                <input type="number" name="f_price" value="<?php echo $getFood->f_price;?>"  class="medium" />
                            </td>
                        </tr>
												<tr>
														 <td>
																 <label>Upload Image</label>
														 </td>
														 <td>
                                 <img src="<?php echo $getFood->f_image;?>" height="80px" width="200px" /><br/>
																 <input type="file" name="image" />
														 </td>
							 					</tr>
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="food_id">

                                    <option>Select Category</option>
                                    <?php
                                  $foodShow  = new food();
                                      $getFoodd = $foodShow->getAllFoodTime($foodShow);
                                        if($getFoodd){
                                        foreach ($getFoodd as $data) {
                                    ?>

                                    <?php
                               if($getFood->f_name == $getFoodd->f_name) { ?>
                                 selected="selected"
                                 <?php } ?>
                                     <option value="<?php echo $data['food_id']; ?>"><?php echo $data['f_name']; ?></option>
                                    <?php } } ?>
                            </td>
                        </tr>
					            	<tr>
                            <td>
                                <input type="submit" name="save" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php }  ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
