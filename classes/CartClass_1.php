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
	
	$sql="SELECT COUNT(*) AS cren FROM cart WHERE date='$datecheck'";
	$query = $this->pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
		
		
	}
	
	
}

?>