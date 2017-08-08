<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include 'classes/base.php';?>
<?php include 'classes/SubClass.php';?>
<?php include 'classes/FoodClass.php';?>
<?php

$food = new Fooddd();

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['save'])){

	$insertFood = $food->food_insert($_POST,$_FILES);
}

?>

<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Food</h2>
        <div class="block">
          <?php
              if(isset($insertFood)){
                echo $insertFood;
              }
          ?>
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="f_name" placeholder="Enter Food Name..." class="medium" />
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
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="f_details"></textarea>
                    </td>
                </tr>
			        	<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" name="f_price" placeholder="Enter Price..." class="medium" />
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
                    <td></td>
                    <td>
                        <input type="submit" name="save" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
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
