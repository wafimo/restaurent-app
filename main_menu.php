
       <?php
        $filepath = realpath(dirname(__FILE__));
    	 include_once ($filepath.'/classes/SubClass.php');
     ?>

  
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
</head>
<script type="text/javascript">
var argument;
$(document).ready(
//var argument;
function myFunction() {
	//$('#output').html();
	
	    $.ajax({
		url:"classes/SubClass.php",
		//data:argument,
        data:{argument: ""}, 
		type: "POST",
		success:function(data){$('#output').html(data);}
		//success:function(data){$('#outputt').html(data="");}
	});});
</script>
<script type="text/javascript">
function getPage(food_id) {
	$('#output').html(" ");
	//$('#output').html();
	$.ajax({
		  url:"classes/SubClass.php",
		  method:"POST",
		  data:'food_id='+food_id,
		  dataType:"text",
		
		success:function(data){$('#output').html(data);}
	});
}

function getPagee(all) {
	//$('#output').html();
	$('#output').html(" ");
	$.ajax({
		  url:"classes/SubClass.php",
		  method:"POST",
		  data:'all='+all,
		  dataType:"text",
		
		success:function(data){$('#output').html(data);}
	});
}
</script>
<script type="text/javascript">

function load_all(load) {
	//$('#output').html();
	//$('#output').html(" ");
	$.ajax({
		  url:"classes/SubClass.php",
		  method:"POST",
		  data:'load='+load,
		  dataType:"text",
		
		success:function(data){$('#output').html(data);}
	});
}


</script>
<body>
 <div class="section menu-section" id="menu">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Our Menu</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>

                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->

	  

		
	 <form action="" method="POST">
	
		 <div id="menu">
		 
		<div class="section menu-section" id="menu">
          <div class="row">
    <ul class="filter-nav">
	<input type="button" name="AllDeshes" class="vojon" value="AllDeshes"onClick="getPagee(all);" />
					 
         <?php

		  $foodType= new food();
            $getfood = $foodType->selectTimee();
  					if($getfood){
  						 $i=0;
  					foreach ($getfood as $data) {
  						 $i++;

         ?>

          
			<input class="vojon" type="button" value="<?php echo $data["f_name"]; ?>" onClick="getPage(<?php echo $data["food_id"]; ?>);"  />
					
					<?php }

					}?>	
           </div>
				<div id="output"></div>	
		</div>
      </div>  
	 </div>
	
	                    <!--more item load start-->
                           <div class="cl-sm-12 load-more-btn">
                            <input type="button" name="load" class="vojon" value="LoadAll"onClick="load_all(load);" />
							
                        </div>
						 <!--more item load end-->
	 	</form>
	 


</div>

                        
						 
</body>
</html>
	 