<?php
class Session{

 public static function init()
{
	if (session_status() == PHP_SESSION_NONE)
			{
				session_start();				
			}			
}

public function set($key, $val)
{ 		self::init();
        $_SESSION[$key] = $val;	
}
public function get($key)
{ 		self::init();
        if(isset($_SESSION[$key]))
			return $_SESSION[$key];	
}

public function checkLogin($key)
	{
		self::init();
		if(isset($_SESSION[$key]))
			header("Location:index.php");		
	}
		
public function checkSession($key)
	{
		self::init();
		if(!isset($_SESSION[$key]))
			header("Location:login.php");		
	}
function destroy()
{
	self::init();
	session_destroy();
	 header("Location:login.php");
}

/*redirect index page to login page in logout time*/
/*Lock any page*/
 

}

?>
