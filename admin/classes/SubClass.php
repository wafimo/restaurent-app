<?php
    $filepath = realpath(dirname(__FILE__));
    //include_once ($filepath.'/../helpers/format.php');
    include_once ($filepath.'/base.php');
?>
<?php

class food extends Database{

    public function food_insert($data){

	$name=$data['food'];
	
	if($name==""){

		$mgs="<div class='alert alert-danger'><strong>error</strong>field must not be empty</div>";
		return $mgs;
	}
	$sql="insert into tbl_menu (f_name) values (?)";
	$data = array($name);
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
	$sql="SELECT * FROM tbl_menu ORDER BY food_id DESC";
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
	

    if($name == ""){
       $mgs = "<div class='alert alert-danger'><strong>error!!!</strong>field must not be empty</div>";
		   return $mgs;
    }

    $sql="UPDATE tbl_menu set
	       f_name    = :name
		   
		   WHERE food_id = :id";
    $query=$this->pdo->prepare($sql);

    $query->bindValue(':name',$name);
    
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

        $time = date("G:i");
		$query="SELECT * FROM tbl_menu WHERE s_time<'$time' AND e_time>'$time' LIMIT 1 UNION SELECT * FROM tbl_menu ";
		return $result=$this->select($query);
		//UNION SELECT f_name FROM tbl_menu

	}

  public function foodInfo($data,$id){
    $sql="SELECT * FROM tbl_food WHERE 	f_type_id = :id ";
  	$query = $this->pdo->prepare($sql);
      $query->bindValue(':id', $id);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_OBJ);
      return $result;
  }
  
}

?>
