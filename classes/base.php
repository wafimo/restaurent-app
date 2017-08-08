<?php


class Database{

	private $hostdb= "mysql5.gear.host";
	private $userdb= "restaurent41";
	private $passdb= "Fa5P?yw~3OLk";
	private $namedb= "restaurent41";
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
