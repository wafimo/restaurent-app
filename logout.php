<?php

    $filepath = realpath(dirname(__FILE__));
      include_once ($filepath.'/classes/session.php');
	  include_once ($filepath.'/classes/CartClass.php');
	  $cart= new CartClass();
	 $cid=Session::get("userId");

if(isset($cid)){
		  
                $delData = $cart->deleteCustomerCart($cid);
		
	  
	  Session::destroy();
}
 ?>

