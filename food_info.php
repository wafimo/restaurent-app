<?php include_once ($filepath.'/main_menu.php'); ?>
<?php
 $foodType= new food();
if (!isset($_GET['food_id']) || $_GET['food_id'] == NULL){
  echo "<script>window.location = 'staff_list.php';</script>";
}else{
  $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['food_id']);
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

    $foodInfo  = $foodType->foodInfo($_POST,$id);

  if($foodInfo){
    $i=0;
 foreach ($foodInfo as $data) {
    $i++;
?>
<form  Action ="" method="POST" >
                    <div class="row">
                        <div class="menu gallery">
                            <div class="menu-items col-sm-3 breakfast" data-category="transition">
                                <a href="images/menu/menu-1.jpg" data-gal="prettyPhoto[gallery1]">
                                    <img src="<?php echo $data['f_image']; ?>" width="270" height="270" alt="">
                                    <div class="menu-item">
                                         <h2>Pizza Mexicana</h2>
                                         <h3>$20</h3>
                                    </div>
                                </a>
                            </div>
                          </div>
                      </div>
  <?php } } } ?>
</form>
