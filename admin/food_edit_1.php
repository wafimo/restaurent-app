<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php include 'classes/FoodClass.php';?>
<?php
  $food = new Fooddd();

if (!isset($_GET['food_id']) || $_GET['food_id'] == NULL){
  echo "<script>window.location = 'food_list.php';</script>";
}else{
  $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['food_id']);
}


  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])){

      $updateFood  = $staff->foodUpdate($_POST,$id,$_FILES);
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
                                <input type="text" name="f_name" value="<?php echo $getFood->f_name;?>" placeholder="Enter Food name..." class="medium" />
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
                                      $getFood = $foodShow->getAllFoodTime();
                                        if($getFood){
                                        foreach ($getFood as $data) {
                                    ?>
                                    <option value="<?php echo $data['food_id']; ?>"><?php echo $data['f_name']; ?></option>
                                    <?php } } ?>
                            </td>
                        </tr>
					             	<tr>
						                <td>
                               <label>Description</label>
                            </td>
                            <td>
                                <input type="text" name="f_details" value="<?php echo $getFood->f_details;?>" placeholder="Enter Staff Possition..." class="medium" />
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
public function foodUpdate($data,$id,$file){
  $f_name = $data['f_name'];
  //$f_category = $data['food_id'];
  $f_description = $data['f_details'];
  $f_price = $data['f_price'];

  $permited  = array('jpg', 'jpeg', 'png', 'gif');
  $file_name = $file['image']['name'];
  $file_size = $file['image']['size'];
  $file_temp = $file['image']['tmp_name'];

  $div = explode('.', $file_name);
  $file_ext = strtolower(end($div));
  $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
  $uploaded_image = "upload/".$unique_image;
  move_uploaded_file($file_temp, $uploaded_image);

  if($f_name == "" || $f_description == "" || $f_price == "" || $file_name == "" ){

      $mgs = "<span class='error'> fields must not be empty!!</span>";
                return $mgs;
    }else {//if want to update with image
     if(!empty($file_name)){
       if ($file_size >1048567) {
           echo "<span class='error'>Image Size should be less then 1MB!
           </span>";
          } elseif (in_array($file_ext, $permited) === false) {
           echo "<span class='error'>You can upload only:-"
           .implode(', ', $permited)."</span>";
          }
        else{

    $sql="UPDATE tbl_food set
	       f_name      = :name,
		     f_details   = :details,
		     f_image     = :image,
         f_price     = :price,

		     WHERE f_name_id = :id";
    $query=$this->pdo->prepare($sql);

    $query->bindValue(':name',$f_name);
    $query->bindValue(':details',$f_description);
    $query->bindValue(':image',$uploaded_image);
    $query->bindValue(':price',$f_price);
  //  $query->bindValue(':f_type_id',$f_category);
    $query->bindValue(':id',$id);
    $result=$query->execute();
    if ($result){
      $mgs = "<span class='success'> Update Succesfully.</span>";
                return $mgs;
    }
    else {
      $mgs = "<span class='error'> Not update !!!</span>";
              return $mgs;
    }

  }
} else{//if want to update without image
  $sql="UPDATE tbl_food set
      f_name      = :name,
      f_details   = :details,
      f_image     = :image,
      f_price     = :price,

       WHERE f_name_id = :id";
  $query=$this->pdo->prepare($sql);

  $query->bindValue(':name',$f_name);
  $query->bindValue(':details',$f_description);
  $query->bindValue(':image',$uploaded_image);
  $query->bindValue(':price',$f_price);
  //$query->bindValue(':f_type_id',$f_category);
  $query->bindValue(':id',$id);
  $result=$query->execute();
  if ($result){
    $mgs = "<span class='success'> Update Succesfully.</span>";
              return $mgs;
  }
  else {
    $mgs = "<span class='error'> Not update !!!</span>";
            return $mgs;
  }
}
}
}
