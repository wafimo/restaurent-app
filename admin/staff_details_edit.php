<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/StaffClass.php';?>
<?php
  $staff = new Staff();

if (!isset($_GET['staff_id']) || $_GET['staff_id'] == NULL){
  echo "<script>window.location = 'staff_list.php';</script>";
}else{
  $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['staff_id']);
}


  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])){

      $updateStaff  = $staff->staffUpdate($_POST,$id,$_FILES);
   }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Staff</h2>
               <div class="block copyblock">
                 <?php
                     if(isset($updateStaff)){
                       echo $updateStaff;
                     }
                 ?>
                 <?php

                    $getStaff = $staff->getStaffById($id);
	                 if($getStaff){
                     //foreach($getStaff as $result){

                 ?>
                 <form  Action ="" method="POST" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
						                <td>
                                <label>Staff Name</label>
                            </td>
                            <td>
                                <input type="text" name="s_name" value="<?php echo $getStaff->s_name;?>" placeholder="Enter Staff name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                          <td style="vertical-align: top; padding-top: 9px;">
                              <label>Description</label>
                          </td>
                          <td>
                              <textarea class="tinymce" name="body">
                                    <?php echo $getStaff->s_possition; ?>
                              </textarea>
                          </td>
                       </tr>
					             	<tr>
						                <td>
                               <label>Possition</label>
                            </td>
                            <td>
                                <input type="text" name="s_possition" value="<?php echo $getStaff->s_possition;?>" placeholder="Enter Staff Possition..." class="medium" />
                            </td>
                        </tr>
												<tr>
														 <td>
																 <label>Upload Image</label>
														 </td>
														 <td>
                                 <img src="<?php echo $getStaff->s_image;?>" height="80px" width="200px" /><br/>
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
