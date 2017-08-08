<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/StaffClass.php';?>
<?php
$staff = new Staff();

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['save'])){

	$staff_details = $staff->staff_insert($_POST,$_FILES);
}

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add Staff Details</h2>
				<?php
				if(isset($staff_details)){
					echo "$staff_details";
				}
				?>
               <div class="block copyblock">
                 <form  Action ="" method="POST" enctype="multipart/form-data">
                    <table class="form">
                        <tr>
						                <td>
                                <label>Staff Name</label>
                            </td>
                            <td>
                                <input type="text" name="s_name" placeholder="Enter Staff name..." class="medium" />
                            </td>
                        </tr>
					             	<tr>
						                <td>
                               <label>Possition</label>
                            </td>
                            <td>
                                <input type="text" name="s_possition" placeholder="Enter Staff Possition..." class="medium" />
                            </td>
                        </tr>
												<tr>
														 <td>
																 <label>Upload Image</label>
														 </td>
														 <td>
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
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
