<?php
class Session{

 public static function init()
	{
		if (version_compare(phpversion(), '5.4.0','>')) 
		{
			if (session_id() == '') 
			{
				session_start(); 
			}
			else
			{
				if (session_status() == PHP_SESSION_NONE)
				{
					session_start();
				}
			}
		}
	}
 
 
 
/*SET value for Session*/
 public static function set($key, $val){
        $_SESSION[$key] = $val;
 }
/*GET Value from session*/
 public static function get($key){
      if (isset($_SESSION[$key])) {
       return $_SESSION[$key];
      } else {
       return false;
      }
 }
/*redirect index page to login page in logout time*/
/*Lock any page*/
 public static function checkSession(){
      self::init();
      if (self::get("login")== false) {
       self::destroy();
       header("Location:login.php");
      }
 }
/*Do not access login page in login page*/
/*Lock any page*/
 public static function checkLogin(){
      self::init();
      if (self::get("login")== true) {
       header("Location:index.php");
      }
 }

/*For session distroy */
 public static function destroy(){
      session_destroy();
      session_unset();
      header("Location:login.php");
}

}

?>
