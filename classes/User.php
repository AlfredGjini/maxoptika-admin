<?php 
class User{
	private $_db, 
			$_data,
			$_sessionName,
			$_isLoggedIn;

	public function __construct($user = null){
		$this->_db = DB::getInstance();
		$this->_sessionName = Config::get('session/session_name');
		if(!$user){
			if(Session::exists($this->_sessionName)){
				$user = Session::get($this->_sessionName);

				if($this->find($user)){
					$this->_isLoggedIn = true;
				}else{
					//logout
				}
			}
		}else{
			$this->find($user);
		} 
	}

	public function create($fields = []){

		if(!$this->_db->insert('users',$fields)){
			throw new Exception('There was a problem creating an new User!' . $this->_db->error());
		}
	}

	public function update($field = [],$id){
		if(!$id && $this->isLoggedIn()){
			$id = $this->data()->id;
		}

		if(!$this->_db->update('users',$id,$fields)){
			throw new Exception("Error updating");
		}
	}

	public function find($user = null){
		/*
			TODO : make alphanumeric username not numeric
		*/
		if($user){
			$field = (is_numeric($user)) ? 'id' : 'username';
			$data = $this->_db->get('users',[[$field,'=',$user]]);
			if($data->count()){
				$this->_data = $data->firstResult();
				return true;
			}
 		}
 		return false;
	}

	public function login($username = null, $password = null){
		$user = $this->find($username);
		
		if($user){
			if(Input::get('password') === $this->data()->password){
				Session::put($this->_sessionName,$this->data()->id);
				return true;
			}
		}
		return false;
	}

	public function hasPermission($key){
		$group = $this->_db->get('groups',[['id','=',$this->data()->group_id]]);
		if($group->count()){
			$permissions = json_decode($group->firstResult()->permissions,$key);
			if($permissions[$key] == true){
				return true;
			}
			return false;
		}
	}


	public function logout(){
		Session::delete($this->_sessionName);
	}

	public function data(){
		return $this->_data;
	}

	public function isLoggedIn(){
		return $this->_isLoggedIn;
	}

}