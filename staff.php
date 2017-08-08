
<?php  //include 'update_menu.php';?>
  <?php// include 'menu.php';?>
  <?php
    $filepath = realpath(dirname(__FILE__));
    //include_once ($filepath.'/../helpers/format.php');
     //include_once ($filepath.'/classes/StaffClass.php');
	 //include_once ($filepath.'/classes/SubClass.php');
?>
  <?php
  //$food_type= new food();

  ?>



              <div class="section team-section" id="staff">
                <div class="container" >
                    <div class="row">

					<?php
    $filepath = realpath(dirname(__FILE__));
	 include_once ($filepath.'/classes/StaffClass.php');

     ?>

				   <?php
				 // $foodType= new food();

				  ?>

                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>Our Staff</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end about caption -->
                    </div><!-- end of /.row -->
                    <div class="row">


						 <?php
							 include_once ($filepath.'/StaffClass.php');
							$staff=new Staff();
              $getStaff = $staff->getAlllStaff();
					if($getStaff){
						 $i=0;
					foreach ($getStaff as $data) {
						 $i++;
            ?>
			<div class="col-md-3 col-sm-6">
		<div class="about-profile">
			<img src="admin/<?php echo $data['s_image']; ?>" style="width:270px; height:270px;" alt="">
			<div class="profile-details">
				<h2 style="color:white"><?php echo $data['s_name']; ?> </h2>
				<span style="color:white"><?php echo $data['s_possition']; ?></span>
			</div>
		</div>
	</div>

					<?php }} ?>

                    </div>

                </div><!-- end of /.container -->
            </div><!-- end of /.about section -->
