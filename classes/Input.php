<?php 
class Input{
	public static function exists($type = 'post'){
		switch ($type) {
			case 'post':
				return (!empty($_POST) ? true : false);
				break;
			
			case 'get':
				return (!empty($_GET) ? true : false);
			break;

			default:
				return false;
			break;
		}
	}

	public static function get($attribute){
		if(isset($_POST[$attribute])){
			return $_POST[$attribute];
		}else if(isset($_GET[$attribute])){
			return $_GET[$attribute];
		}
		return '';
	}
}