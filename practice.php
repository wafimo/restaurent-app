<?php
    $filepath = realpath(dirname(__FILE__));
    //include_once ($filepath.'/../helpers/format.php');
   // include_once ($filepath.'/classes/base.php');
	 include_once ($filepath.'/classes/SubClass.php');
?>
  <?php
  $foodType= new food();
  
  ?>
   <ul class="filter-nav">
         <?php
              $getStaff = $foodType->selectTime();
					if($getStaff){
						 $i=0;
					foreach ($getStaff as $data) {
						 $i++;
            ?>
		
		  
		 <li class="menu"><a href=""><?php echo $data['f_name'];?></a></li>
	   
		<?php  }}
		?>