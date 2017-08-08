<?php


class Database{
	
	private $hostdb= "localhost";
	private $userdb= "root";
	private $passdb= "";
	private $namedb= "db_restaurant";
	protected $pdo;

	 function __construct(){
		
		  if(!isset($this->pdo)){
    try{
	  $link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb,$this->userdb, $this->passdb);

		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->pdo=$link ;

		
		  
	  }
	  catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
		  }
	}
	
	
 }
?>
