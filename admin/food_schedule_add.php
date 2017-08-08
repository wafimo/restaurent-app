<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php
$food_insert= new food();

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['save'])){
	
	$foodSchedule=$food_insert->food_insert($_POST);
}

?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add Food Schedule</h2>
				<?php
				if(isset($foodSchedule)){
					echo "$foodSchedule";
				}
				?>
               <div class="block copyblock"> 
                 <form  Action ="" method="POST">
                    <table class="form">					
                        <tr>
						    <td>
                               <label>Shedule Name</label>
                            </td>
                            <td>
                                <input type="text" name="food" placeholder="Enter Food Schedule..." class="medium" />
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