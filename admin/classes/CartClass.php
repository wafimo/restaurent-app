
<?php
    $filepath = realpath(dirname(__FILE__));

    include_once ($filepath.'/base.php');
	
?>
<?php
class CartClass extends Database{

	public function weeklyReport(){
		 

	$sql="SELECT cart.cart_id , tbl_user.userName, cart.total_price,cart.date from cart join tbl_user on cart.cart_user_id = tbl_user.userId";
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
	}
    public function single_record($single_record){
		 

	$sql="SELECT * FROM tbl_order INNER JOIN tbl_user ON tbl_order.user_id=tbl_user.userId where invoice_id= '$single_record'";
	
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
	}
	
	public function details($id){

  

	$sql="SELECT * FROM tbl_order INNER JOIN tbl_user ON tbl_order.user_id=tbl_user.userId where invoice_id= '$id'";
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;   
       
}

public function quantity($idd){
		 

	$sql="SELECT * FROM cart WHERE cart_id='$idd'";
	
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
	}
	
	
	public function All_record(){
		 

	$sql="SELECT * FROM tbl_order INNER JOIN tbl_user ON tbl_order.user_id=tbl_user.userId GROUP BY invoice_id";
	
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    return $result;
	}
}

?>
				 