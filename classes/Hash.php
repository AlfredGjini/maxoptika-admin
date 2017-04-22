<?php 
class Hash{
	public static function make($passwd){
		return password_hash($passwd, PASSWORD_BCRYPT);
	}

	public static function salt(){
		return mt_rand();
	}

	public static function unique(){
		return self::make(uniqid());
	}
}