<?php
    $filepath = realpath(dirname(__FILE__));
    //include_once ($filepath.'/../helpers/format.php');
    include_once ($filepath.'/base.php');
	include_once ($filepath.'/session.php');
?>

<?php

class User extends Database{

	 public function userRegistration($data){
    $name     = $data['InputName'];
    $phone = $data['InputPhoneNumber'];
    $email    = $data['InputEmail1'];
	$password = $data['InputPassword'];
	$address = $data['InputAddress'];
    //$password = md5($data['password']);

    //$chk_email = $this->emailCheck($email);

    if($name == "" OR $phone == "" OR $email == "" OR $password == "" OR $address == ""){
       $mgs = "<div class='alert alert-danger'><strong>error!!!</strong>field must not be empty</div>";
		   return $mgs;
    }
    /*from validation for $name*/
    if(strlen($name) <3){
  		$mgs="<div class='alert alert-danger'><strong>error!!! </strong>name is too short</div>";
  		return $mgs;
	  }
    elseif(preg_match('/[^a-z0-9_-]+/i',$name)){
    	$mgs="<div class='alert alert-danger'><strong>error!!! </strong>name must contain alphanumerial desh and underscore</div>";
    	return $mgs;
    }
    /*from validation for $email*/
    if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
    	$mgs="<div class='alert alert-danger'><strong>error!!! </strong>the email address is not valid</div>";
    	return $mgs;
    }

    /*insert data in Database*/
    $sql="insert into tbl_user (userName,phone,email,password,address) values (?,?,?,?,?)";
	$data = array($name,$phone,$email,$password,$address);
	$query=$this->pdo->prepare($sql);
	$result=$query->execute($data);
    if ($result){
    	?><script> location.replace("login.php"); </script><?php

    	return $mgs;
    }
    else {
    	$mgs="<div class='alert alert-danger'><strong>error!!! </strong>there has some prblm</div>";
    	return $mgs;
    }
  }

/*fetch email and password from database */
  public function getLoginUser($email,$password){
    $sql = "SELECT * FROM tbl_user Where email = :email AND password = :password LIMIT 1";
    $query=$this->pdo->prepare($sql);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return $result;
  }

    /*Method for User_Login*/
  public function userLogin($data){
   $email    = $data['InputEmail1'];
   $password = ($data['InputPassword']);
   //$password = md5($data['password']);

   if($email == "" OR $password == ""){
      $mgs = "<div class='alert alert-danger'><strong>error!!! </strong>field must not be empty</div>";
      return $mgs;
   }
    /*Check exitance of email from Database for Login*/
   if(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
     $mgs="<div class='alert alert-danger'><strong>error!!! </strong>the email address is not valid</div>";
     return $mgs;
   }

   /*end of user_login*/

/* set value in Session*/
 $login  = $this->getLoginUser($email,$password);
   if($login){

      /*if(Session::init())
		  $mgs="Session Ok";
	  $mgs="Session not Ok";*/
      //Session::set("login",true);
      Session::set("userId",$login->userId);
		  $mgs=Session::get("userId");
		//$mgs="<div class='alert alert-success'><strong>success!! </strong>You are logged in</div>";
    	?><script> location.replace("index.php"); </script><?php

   }else{
     $mgs="<div class='alert alert-danger'><strong>error!!! </strong>Data not found</div>";

   }
   return $mgs;
}

/*public function getuserdata($data){
	$email    = $data['InputEmail1'];
	$sql="SELECT * FROM tbl_user WHERE email = '$email'";
	$query=$this->pdo->prepare($sql);
	$query->execute();
	$result=$query->fetchAll();
	return $result;
}*/


}
?>
