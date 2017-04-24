<?php 
class DB{
	private static $_instance = null;
	private $_pdo,
			$_query,
			$_error = false,
			$_results,
			$_count = 0;

	private function __construct(){
		try{
			$this->_pdo = new PDO('pgsql:host=' .Config::get('mysql/host').';port='.Config::get('mysql/port').';dbname='.Config::get('mysql/db'),Config::get('mysql/username'),Config::get('mysql/password'));
			$this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connected";
		}catch(PDOException $e){
			$e->getMessage();
			echo "Something went wrong!";
			 //print_r($e->getTrace());
			 print_r($e->getMessage());
		}
	}

	public static function getInstance(){
		if(!isset(self::$_instance)){
			self::$_instance = new DB();
		}
		return self::$_instance;
	}

	public function query($sql,$params = []){
		$this->_error = false;
		if($this->_query = $this->_pdo->prepare($sql)){
			$i = 1;
			foreach($params as $param){
				$this->_query->bindValue($i,$param);
				$i++;
			}
			//echo $this->_query;
			if($this->_query->execute()){
				/*
					using strpos function te determine if the query is a SELECT, because if its not then it doesnt returns results;
				*/
				if(strpos($sql,'SELECT') !== false){
					$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
					$this->_count = $this->_query->rowCount();
				}
			}else{
				$this->_error = true;
			}
		}
		return $this;
	}

	public function action($action,$table,$where = [],$extras = []){
		if(count($where === 3)){
			$operators = array('=', '>','<','<=','>=','like');
			$where_cnt = 0;
			foreach($where as $cond){
				if($where_cnt === 0){
					$field    = $cond[0];
					$operator = $cond[1];
					$value[]  = $cond[2];
					$sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
				}
				else{
					$lop = $cond[0];
					$field = $cond[1];
					$operator = $cond[2];
					$value[] = $cond[3];
					$sql .= " {$lop} {$field} {$operator} ?";
				}
				$where_cnt ++;	
			}
			
			foreach($extras as $extra){
				$sql .= $extra." ";
			}
			
			//echo $sql;
			//print_r($value);
			
			
			if(!$this->query($sql,$value)->error()){
					return $this;
			}
			
		}
		return false;
	}

	/*
		method to get a single  column from db
	*/
	public function get($table,$where,$extras=[]){
		return $this->action("SELECT *",$table,$where,$extras);
	}

	public function getAll($table,$extras=[]){
		$sql = "SELECT * FROM {$table}";
		foreach($extras as $extra){
			$sql .= " ".$extra;
		}
		return $this->query($sql);
		
	}

	public function delete($table,$where=[]){
		return $this->action("DELETE",$table,$where);
	}

	public function insert($table, $fields = []){
		if(count($fields)){
			$attributes = array_keys($fields);
			$values = '';
			$index = 1;

			foreach($fields as $field){
				$values .= '?';
				if($index < count($fields)){
					$values .= ', ';
				}	
				$index++;
			}

			$sql = "INSERT INTO {$table} (". implode(',', $attributes) . ") VALUES({$values})";
			
			if(!$this->query($sql,$fields)->error()){
				return true;
			}
		}
		return false;
	}

	public function update($table, $id, $fields = [],$where = []){
		$set = '';
		$index = 1;

		foreach($fields as $name => $value){
			$set .= "{$name} = ?";
			if($index < count($fields)){
				$set .= ', ';
			}
			$index++;
		}

		$sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";
		
		if(count($where) !== 0){
			foreach($where as $cond){
				$sql .= " {$cond['0']} {$cond['1']} {$cond['2']} {$cond['3']}";
			}
		}
		
		if(!$this->query($sql,$fields)->error()){
			return true;
		}

		return false;
	}

	public function results(){
		return $this->_results;
	}

	public function firstResult(){
		if($this->results()[0]==null){
			return 0;
		}else{
			return $this->results()[0];
		}
		
	}

	public function error(){
		return $this->_error;
	}

	public function count(){
		return $this->_count;
	}
}