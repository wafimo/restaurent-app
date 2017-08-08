<?php
    $filepath = realpath(dirname(__FILE__));
    //include_once ($filepath.'/../helpers/format.php');
    include_once ($filepath.'/base.php');
?>
<?php

class Fooddd extends Database{

  public function food_insert($data,$file){

  $f_name = $data['f_name'];
  $f_category = $data['food_id'];
  $f_description = $data['f_details'];
  $f_price = $data['f_price'];

        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;
        move_uploaded_file($file_temp, $uploaded_image);


  if($f_name == "" || $f_category == "" || $f_description == "" || $f_price == "" || $file_name == "" ){

    $mgs = "<span class='error'> fields must not be empty!!</span>";
              return $mgs;
  }
  $sql="insert into tbl_food (f_name,f_type_id,f_price,f_image,f_details) values (?,?,?,?,?)";
  $data = array($f_name,$f_category,$f_price,$uploaded_image,$f_description);
  $query=$this->pdo->prepare($sql);
  $result=$query->execute($data);
  if ($result)  {
    $mgs = "<span class='success'> Inserted Succesfully.</span>";
          return $mgs;
  }
  else {
    $mgs = "<span class='error'> Not Inserted !!!</span>";
          return $mgs;
     }
}

public function getAllFood(){
	$sql="SELECT * FROM tbl_food ORDER BY f_name_id DESC";
	$query=$this->pdo->prepare($sql);
	$query->execute();
	$result=$query->fetchAll();
	return $result;
}

public function getFoodById($id){
	$sql="SELECT * FROM tbl_food WHERE f_name_id = :id LIMIT 1";
	$query = $this->pdo->prepare($sql);
    $query->bindValue(':id', $id);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}

public function foodUpdate($data,$id,$file){
  $f_name = $data['f_name'];
  $f_category = $data['food_id'];
	$f_details = $data['f_details'];
  $f_price = $data['f_price'];

  $permited  = array('jpg', 'jpeg', 'png', 'gif');
  $file_name = $file['image']['name'];
  $file_size = $file['image']['size'];
  $file_temp = $file['image']['tmp_name'];

  $div = explode('.', $file_name);
  $file_ext = strtolower(end($div));
  $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
  $uploaded_image = "upload/".$unique_image;
  move_uploaded_file($file_temp, $uploaded_image);

    if($f_name == "" OR $f_details == "" OR $f_price == "" ){
      $mgs = "<span class='error'> fields must not be empty!!</span>";
                return $mgs;
    }else {//if want to update with image
     if(!empty($file_name)){
       if ($file_size >1048567) {
           echo "<span class='error'>Image Size should be less then 1MB!
           </span>";
          } elseif (in_array($file_ext, $permited) === false) {
           echo "<span class='error'>You can upload only:-"
           .implode(', ', $permited)."</span>";
          }
        else{

    $sql="UPDATE tbl_food set
	       f_name      = :name,
		     f_type_id   = :type,
		     f_price     = :price,
         f_image     = :image,
         f_details   = :details
		 WHERE f_name_id = :id";
    $query=$this->pdo->prepare($sql);

    $query->bindValue(':name',$f_name);
    $query->bindValue(':type',$f_category);
    $query->bindValue(':price',$f_price);
    $query->bindValue(':image',$uploaded_image);
    $query->bindValue(':details',$f_details);
    $query->bindValue(':id',$id);
    $result=$query->execute();
    if ($result){
      $mgs = "<span class='success'> Update Succesfully.</span>";
                return $mgs;
    }
    else {
      $mgs = "<span class='error'> Not update !!!</span>";
              return $mgs;
    }

  }
} else{//if want to update without image
  $sql="UPDATE tbl_food set
  f_name      = :name,
  f_type_id   = :type,
  f_price     = :price,
  f_details   = :details
WHERE f_name_id = :id";
$query=$this->pdo->prepare($sql);

$query->bindValue(':name',$f_name);
$query->bindValue(':type',$f_category);
$query->bindValue(':price',$f_price);
$query->bindValue(':details',$f_details);
$query->bindValue(':id',$id);
  $result=$query->execute();
  if ($result){
    $mgs = "<span class='success'> Update Succesfully.</span>";
              return $mgs;
  }
  else {
    $mgs = "<span class='error'> Not update !!!</span>";
            return $mgs;
  }
}
}
}


public function delFoodById($id){
                 $sql = "DELETE FROM tbl_food WHERE f_name_id = '$id'";
                 $query = $this->pdo->prepare($sql);
	             $deldata = $query->execute();
                 if($deldata){
                   $mgs = "<span class='success'> Deleted Succesfully.</span>";
                   return $mgs;
                 }else{
                   $mgs = "<span class='error'> Not Deleted !!!</span>";
                   return $mgs;
                 }
               }
			   
			   
 public function food_insertt($from,$to){

  

	$sql="SELECT cart.cart_id , tbl_user.userName, cart.total_price,cart.date from cart join tbl_user on cart.cart_user_id = tbl_user.userId where date between '$from' and '$to'";
	
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
 }
	


}

?>
