<?php
  class ConexionBD{
	private static $bdhost = "dnjs2.wnkserver2.com:3306";
	private static $bdname = "bsstudio_tecnocuero";
	private static $bduser = "bsstudio_root";
	private static $bdpass = "kSQiNwOc5Jz4n7TEMy";
	private static $conn = null;

	public static function AbrirBD(){
	 	if(self::$conn == null){
			 try{
			 	self::$conn = new PDO('mysql:host='.self::$bdhost.';dbname='.self::$bdname.'',self::$bduser, self::$bdpass);
			 	self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
			 }catch(PDOException $e){

			 	echo $e->getMessage();
			 }
			return self::$conn;
		}
	}
   public static function CerrarBD(){
	  	self::$conn = null;

   }
 }
?>
