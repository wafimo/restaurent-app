<?php
    $filepath = realpath(dirname(__FILE__));
    //include_once ($filepath.'/../helpers/format.php');
    include_once ($filepath.'/base.php');
?>
<?php

class Staff extends Database{

  public function staff_insert($data,$file){

	$s_name = $data['s_name'];
	$s_possition = $data['s_possition'];
  //code for image upload
        $permited  = array('jpg', 'jpeg', 'png', 'gif');
        $file_name = $file['image']['name'];
        $file_size = $file['image']['size'];
        $file_temp = $file['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_ext = strtolower(end($div));
        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
        $uploaded_image = "upload/".$unique_image;
        move_uploaded_file($file_temp, $uploaded_image);
      // end of image upload

	if($s_name == "" || $s_possition == "" ){

    $mgs = "<span class='error'> fields must not be empty!!</span>";
              return $mgs;
	}
	$sql="insert into tbl_staff (s_name,s_possition,s_image) values (?,?,?)";
	$data = array($s_name,$s_possition,$uploaded_image);
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

			   /*Fetch all data from database*/
public function getAllStaff(){
	$sql="SELECT * FROM tbl_staff ORDER BY staff_id DESC";
	$query=$this->pdo->prepare($sql);
	$query->execute();
	$result=$query->fetchAll();
	return $result;
}

public function getStaffById($id){
	$sql="SELECT * FROM tbl_staff WHERE staff_id = :id LIMIT 1";
	$query = $this->pdo->prepare($sql);
    $query->bindValue(':id', $id);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
}

public function staffUpdate($data,$id,$file){
  $s_name = $data['s_name'];
	$s_possition = $data['s_possition'];

  $permited  = array('jpg', 'jpeg', 'png', 'gif');
  $file_name = $file['image']['name'];
  $file_size = $file['image']['size'];
  $file_temp = $file['image']['tmp_name'];

  $div = explode('.', $file_name);
  $file_ext = strtolower(end($div));
  $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
  $uploaded_image = "upload/".$unique_image;
  move_uploaded_file($file_temp, $uploaded_image);

    if($s_name == "" OR $s_possition == "" ){
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

    $sql="UPDATE tbl_staff set
	       s_name      = :name,
		     s_possition = :possition,
		     s_image     = :image
		     WHERE staff_id = :id";
    $query=$this->pdo->prepare($sql);

    $query->bindValue(':name',$s_name);
    $query->bindValue(':possition',$s_possition);
    $query->bindValue(':image',$uploaded_image);
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
  $sql="UPDATE tbl_staff set
       s_name      = :name,
       s_possition = :possition
       WHERE staff_id = :id";
  $query=$this->pdo->prepare($sql);

  $query->bindValue(':name',$s_name);
  $query->bindValue(':possition',$s_possition);
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
public function delStaffById($id){
                 $sql = "DELETE FROM tbl_staff WHERE staff_id = '$id'";
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

			public function getAlllStaff(){
				$sql="SELECT * FROM tbl_staff ORDER BY staff_id DESC";
	           $query=$this->pdo->prepare($sql);
				$query->execute();
				$result=$query->fetchAll();
				return $result;
							
				
			}   
			   
}

?>
