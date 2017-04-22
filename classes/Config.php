<?php 
class Config{
	public static function get($path = null){
		if($path){
			$config = $GLOBALS['config'];
			$path = explode('/',$path);

			foreach ($path as $sub) {
				if(isset($config[$sub])){
					$config = $config[$sub];
				}
			}
			return $config;
		}
		return false;
	}

	public static function path(){
		return 'http://'. $_SERVER['SERVER_NAME'] . '/market';
	}

	public static function menu($user = ''){
		if(!empty($user)){
			$menu = ['profile','shitje','hyrje','magazina','bilanci','personeli','logout'];
		}
		return $menu;
	}
}