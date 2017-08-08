<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php
 $food_insert= new food();
 
if (!isset($_GET['food_id']) || $_GET['food_id'] == NULL){
  echo "<script>window.location = 'brandlist.php';</script>";
}else{
  $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['food_id']);
}
   
  
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
      
      $updateTime  = $food_insert->foodTimeUpdate($_POST,$id);
   }
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Brand</h2>
               <div class="block copyblock">
                 <?php
                     if(isset($updateTime)){
                       echo $updateTime;
                     }
                 ?>
                 <?php
                 
                    $getFoodTime = $food_insert->getFoodTimeById($id);
	                 if($getFoodTime){
                 ?>
                 <form action="" method="POST">
                    <table class="form">
                         <tr>
						    <td>
                               <label>Shedule Name</label>
                            </td>
                            <td>
                                <input type="text" name="food" value="<?php echo $getFoodTime->f_name;?>" placeholder="Enter Food Schedule..."  class="medium" />
                            </td>
                        </tr>
						
						
						<tr>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
