
<?php
    $filepath = realpath(dirname(__FILE__));

    include_once ($filepath.'/base.php');
	
?>
<?php
class CartClass extends Database{

	public function cartNumber(){
		 $renum;
		
    $date=date("dmy");

	 $datecheck=date("Y-m-d");

	$sql="SELECT COUNT(*) AS cren FROM tbl_cart_temp WHERE date='$datecheck'";
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
	}

  public function addToCart($quantity,$id,$invoice,$userID){
         echo $userID;
		 $sessionId = session_id();
      $squery = "SELECT * FROM tbl_food WHERE f_name_id = '$id'";
        $query=$this->pdo->prepare($squery);
    	$query->execute();
    	$result = $query->fetchAll();
    	//return $result;
      /*echo "<pre>";
      print_r($result);
      echo "</pre>"; */
	  if($result){
		  foreach($result as $data){
          $foodName = $data['f_name'];
          $price    = $data['f_price'];
		  $image    = $data['f_image'];
  } }
      
      $sqlquery = "INSERT INTO tbl_cart(sId,cartId,userId,foodNameId,foodName,price,quantity,image) VALUES(?,?,?,?,?,?,?,?)";
	  //$sqlquery = "INSERT INTO tbl_cart(foodNameId,quantity) VALUES(?,?)";
      $data = array($sessionId,$invoice,$userID,$id,$foodName,$price,$quantity,$image);
	  //$data = array($id,$quantity);
	  $query=$this->pdo->prepare($sqlquery);
	  $result=$query->execute($data);
	  //return $result;
	  if ($result){?>
        <!--//header("Location:cart.php");
		//echo '<META HTTP-EQUIV="refresh" content="0;URL=cart.php">';-->
		 <script> location.replace("cart.php"); </script><?php 
      }else{
          header("Location:404.php");
       }
     
  }

  public function getCartFood($invoice){
      //$sId = session_id();
      $sql = "SELECT * FROM tbl_cart WHERE cartId = '$invoice'";
      $query = $this->pdo->prepare($sql);
        //$query->bindValue(':id', $id);
        $query->execute();
        $result = $query->fetchAll();
    	return $result;
      /*echo "<pre>";
      print_r($result);
      echo "</pre>"; */
   
    }

    public function delFoodByCart($delId){
      $sql = "DELETE FROM tbl_cart WHERE cart_tbl_id = '$delId'";
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
	  
	   //update quantity in cart table
    public function updateCart($cart_tbl_id,$quantity){
      
      $sql    = "UPDATE tbl_cart
                 SET
				 quantity    = :quantity
                 WHERE cart_tbl_id = :cart_tbl_id";
      $query=$this->pdo->prepare($sql);

    $query->bindValue(':quantity',$quantity);
    $query->bindValue(':cart_tbl_id',$cart_tbl_id);
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

 public function getCartData($invoice){
      //$sId = session_id();
		$sql = "SELECT * FROM tbl_cart WHERE cartId = '$invoice'";
		$query = $this->pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
    }
	
 public function submitTotalByCart($user_id){
       $datecheck=date("Y-m-d");
	   $sId = session_id();
       $squery = "SELECT * FROM tbl_cart WHERE 	sId ='$sId'";
        $query=$this->pdo->prepare($squery);
    	$query->execute();
    	$resultCart = $query->fetchAll();
	  if($resultCart){
		  
		  foreach($resultCart as $data)
		  {
		  $cart_id=$data['cartId'];
		  //$user_id=$data['userId'];
		  $foodID = $data['foodNameId'];
		  
          $foodName = $data['foodName'];
          $price    = $data['price'];
		  $image    = $data['image'];
		  $quantity    = $data['quantity'];
		  
	  $sqlquery = "INSERT INTO tbl_cart_temp(cartId,userId,foodNameId,foodName,price,quantity,image,date) VALUES(?,?,?,?,?,?,?,?)";
	  
      $dataa = array($cart_id,$user_id,$foodID,$foodName,$price,$quantity,$image,$datecheck);
	  
	  $query=$this->pdo->prepare($sqlquery);
	  $resultt=$query->execute($dataa);
	 if ($resultt){?>
		 <script> location.replace("cart.php"); </script><?php 
      }else{
          header("Location:404.php");
       }
		  
	
  } 
  
  
  
  }
      
     
 }
 
public function Report($invoice){
      //$sId = session_id();
		$sql = "SELECT * FROM tbl_cart WHERE cartId = '$invoice'";
		$query = $this->pdo->prepare($sql);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
    }

// Delete data from cart table session wise in logout time
    public function deleteCustomerCart(){
        $sId = session_id();
        $sql = "DELETE FROM tbl_cart WHERE sId='$sId'";
        $query = $this->pdo->prepare($sql);
		$query->execute();
		//$result = $query->fetchAll(PDO::FETCH_ASSOC);
		//return $result;
    }	
	

}

?>
				 