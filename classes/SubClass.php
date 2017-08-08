<?php
    $filepath = realpath(dirname(__FILE__));

    include_once ($filepath.'/base.php');
?>
<?php

class food extends Database{

    public function food_insert($data){

	$name=$data['food'];
	$s_time = $data['s_time'];
	$e_time = $data['e_time'];
	if($name==""){

		$mgs="<div class='alert alert-danger'><strong>error</strong>field must not be empty</div>";
		return $mgs;
	}
	$sql="insert into tbl_menu (f_name,s_time,e_time) values (?,?,?)";
	$data = array($name,$s_time,$e_time);
	$query=$this->pdo->prepare($sql);
	$result=$query->execute($data);
	if ($result)  {
		$mgs="<div class='alert alert-success'><strong>success</strong>successfully added</div>";
		return $mgs;
	}
	else {
		$mgs="<div class='alert alert-danger'><strong>error</strong>there has some prblm</div>";
		return $mgs;
		 }

               }

			   /*Fetch all data from database*/
public function getAllFoodTime(){
	$sql="SELECT * FROM tbl_menu ORDER BY food_id DESC LIMIT 4";
	$query=$this->pdo->prepare($sql);
	$query->execute();
	$result=$query->fetchAll();
	return $result;
}

public function getFoodTimeById($id){
	$sql="SELECT * FROM tbl_menu WHERE food_id = :id LIMIT 1";
	$query = $this->pdo->prepare($sql);
    $query->bindValue(':id', $id);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}

public function foodTimeUpdate($data,$id){
	$name   = $data['food'];
	$s_time = $data['s_time'];
	$e_time = $data['e_time'];

    if($name == "" OR $s_time == "" OR $e_time == ""){
       $mgs = "<div class='alert alert-danger'><strong>error!!!</strong>field must not be empty</div>";
		   return $mgs;
    }

    $sql="UPDATE tbl_menu set
	       f_name    = :name,
		   s_time = :s_time,
		   e_time    = :e_time
		   WHERE food_id = :id";
    $query=$this->pdo->prepare($sql);

    $query->bindValue(':name',$name);
    $query->bindValue(':s_time',$s_time);
    $query->bindValue(':e_time',$e_time);
    $query->bindValue(':id',$id);
    $result=$query->execute();
    if ($result){
    	$mgs="<div class='alert alert-success'><strong>success ! </strong>Data update successfully </div>";
    	return $mgs;
    }
    else {
    	$mgs="<div class='alert alert-danger'><strong>error!!! </strong>there has some prblm</div>";
    	return $mgs;
    }

}

public function delFoodById($id){
                 $sql = "DELETE FROM tbl_menu WHERE food_id = '$id'";
                 $query = $this->pdo->prepare($sql);
	             $deldata = $query->execute();
                 if($deldata){
                   $mgs = "<span class='success'>schedule Deleted Succesfully.</span>";
                   return $mgs;
                 }else{
                   $mgs = "<span class='error'>schedule Not Deleted !!!</span>";
                   return $mgs;
                 }
               }


   public function selectTime(){

        //$time = date("G:i");

	    //$sql="SELECT * FROM tbl_menu WHERE s_time<'$time' AND e_time>'$time' INNER JOIN tbl_food ON tbl_food.f_name_id=tbl_menu.food_id";
		$sql="SELECT * FROM tbl_menu INNER JOIN tbl_food ON tbl_food.f_type_id=tbl_menu.food_id";
		$query=$this->pdo->prepare($sql);
	    $query->execute();
	    $result=$query->fetchAll();
	    return $result;
		//UNION SELECT f_name FROM tbl_menu

	}
public function selectTimee(){

       // $time = date("G:i");

	    $sql="SELECT * FROM tbl_menu";

		$query=$this->pdo->prepare($sql);
	    $query->execute();
	    $result=$query->fetchAll();
	    return $result;
		//UNION SELECT f_name FROM tbl_menu

	}

  public function foodInfo($id){
	 
    $sql="SELECT * FROM tbl_food WHERE f_type_id = :id ";
  	$query = $this->pdo->prepare($sql);
      $query->bindValue(':id', $id);
      $query->execute();
      $result = $query->fetchAll();
      return $result;
    //  print_r($result);
  }


public function getSingleFood($id){
	$sql="SELECT * FROM tbl_food WHERE f_name_id = :id";

  	$query = $this->pdo->prepare($sql);
      $query->bindValue(':id', $id);
      $query->execute();
      $result = $query->fetchAll();
      return $result;
}

public function AllFood(){
	//$allfood=$data['food_id'];
	  $sql="SELECT * FROM tbl_food limit 8"; 
  	  $query = $this->pdo->prepare($sql);
      //$query->bindValue(':id', $id);
      $query->execute();
      $result = $query->fetchAll();
      return $result;
}
public function menu($value){
	$food=$value['food_id'];
	$sql="SELECT * FROM tbl_food WHERE f_type_id= '$food' "; 
  	$query = $this->pdo->prepare($sql);
    $query->execute();
	$result = $query->fetchAll();
      return $result;
}
public function loadAll(){
	//$allfood=$data['food_id'];
	  $sql="SELECT * FROM tbl_food "; 
  	  $query = $this->pdo->prepare($sql);
      //$query->bindValue(':id', $id);
      $query->execute();
      $result = $query->fetchAll();
      return $result;
}

//dummy function



}
?>
<?php
 $datamenu= new food();
 
if(isset($_POST['food_id']))
{
    $alldata=$datamenu->menu($_POST);
 	 if($alldata){
		 
		 foreach($alldata as $data)	{?>
			<div class="col-md-3 col-sm-6">
		<div class="about-profile">

			<img src="admin/<?php echo $data['f_image']; ?>" width="270" height="270" alt="">
			<div class="profile-details">
				<h2 style="color:white"><?php echo $data['f_name']; ?> </h2>
				<span style="color:white"><?php echo $data['f_price']; ?></span>
				<div class="button">
				<span><a style="color:white" href="food_details.php?foodid=<?php echo       $data['f_name_id']; ?>">Details</a></span>
				</div>
			</div>
		</div>
	</div>
		<?php	 
		 }
	 }
}

?>
<?php
 $datamenu= new food();
 
if(isset($_POST['all']))
{
    $alldata=$datamenu->AllFood();
 	 if($alldata){
		 
		 foreach($alldata as $data)	{?>
			<div class="col-md-3 col-sm-6">
		<div class="about-profile">

			<img src="admin/<?php echo $data['f_image']; ?>" width="270" height="270" alt="">
			<div class="profile-details">
				<h2 style="color:white"><?php echo $data['f_name']; ?> </h2>
				<span style="color:white"><?php echo $data['f_price']; ?></span>
				<div class="button">
				<span><a style="color:white" href="food_details.php?foodid=<?php echo       $data['f_name_id']; ?>">Details</a></span>
				</div>
			</div>
		</div>
	</div>
		<?php	 
		 }
	 }
}
 
?>
<?php
 $datamenu= new food();
 
 

if (isset($_POST['argument']))
{
    $alldataa=$datamenu->AllFood();
 	 if($alldataa){
		 
		 foreach($alldataa as $data)	{?>
			<div class="col-md-3 col-sm-6">
		<div class="about-profile">

			<img src="admin/<?php echo $data['f_image']; ?>" width="270" height="270" alt="">
			<div class="profile-details">
				<h2 style="color:white"><?php echo $data['f_name']; ?> </h2>
				<span style="color:white"><?php echo $data['f_price']; ?></span>
				<div class="button">
				<span><a style="color:white" href="food_details.php?foodid=<?php echo       $data['f_name_id']; ?>">Details</a></span>
				</div>
			</div>
		</div>
	</div>
		<?php	 
		 }
	 }
}
 
?>

<?php
 $datamenu= new food();
 
 

if (isset($_POST['load']))
{
    $alldataa=$datamenu->loadAll();
 	 if($alldataa){
		 
		 foreach($alldataa as $data)	{?>
			<div class="col-md-3 col-sm-6">
		<div class="about-profile">

			<img src="admin/<?php echo $data['f_image']; ?>" width="270" height="270" alt="">
			<div class="profile-details">
				<h2 style="color:white"><?php echo $data['f_name']; ?> </h2>
				<span style="color:white"><?php echo $data['f_price']; ?></span>
				<div class="button">
				<span><a style="color:white" href="food_details.php?foodid=<?php echo       $data['f_name_id']; ?>">Details</a></span>
				</div>
			</div>
		</div>
	</div>
		<?php	 
		 }
	 }
}
 
?>


