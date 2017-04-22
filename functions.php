<?php 

require_once 'core/init.php';
$action = Input::get('action');
$data =  $_POST;

switch ($action) {
	case 'manage_clients':
		$dataResult = DB::getInstance()->getAll('clients')->results();
		$res = '';
		$dataForDT = ["data"=>[]];
		$i = 0;
		foreach ($dataResult as $tableRows) {
			$userDataResult = DB::getInstance()->get('users',[['id','=',$tableRows->user_id]])->firstResult();
			$dataForDT["data"][$i] = [$tableRows->id,$userDataResult->username,$userDataResult->password,$tableRows->emer,$tableRows->mbiemer,$tableRows->mosha,$tableRows->gjinia,$tableRows->vendlindja,$tableRows->celular,$tableRows->email,"<a id='$tableRows->id' name='mod' href='#'>Modifiko</a>&nbsp;<a id='$tableRows->id' name='del' href='#'>Fshij</a>"];
			$i++;
		}
		echo json_encode($dataForDT);	
	break;
	
	case 'register_clients':
		if($data['username'] && $data['password'] && $data['emer']){
		$register_user = DB::getInstance()->insert('users',['name'=>$data['emer'],'username'=>$data['username'],'password'=>$data['password']]);
		if($register_user){
			$userDataResult = DB::getInstance()->get('users',[['username','=',$data['username']],['and','password','=',$data['password']]])->firstResult();
			echo "Klienti u regjistrua me sukses";
			$register_client = DB::getInstance()->insert('clients',['emer'=>$data['emer'],'mbiemer'=>$data['mbiemer'],'mosha'=>$data['mosha'],'gjinia'=>$data['gjinia'],'vendlindja'=>$data['vendlindja'],'celular'=>$data['celular'],'email'=>$data['email'],'user_id'=>$userDataResult->id]);
			if($register_client){
				$responserc="Klienti u ruajt me sukses!";
				echo json_encode($responserc);
			}
		}
		}
		else{
			echo "te dhena boshe";
		}
	break;

	case 'delUser':
		$params = Input::get('param');
		$clientsData  = DB::getInstance()->get('clients',[['id','=',$params['id']]])->firstResult();
		$deleteClient = DB::getInstance()->delete('clients',[['id','=',$params['id']]]);
		$deleteUser = DB::getInstance()->delete('users',[['id','=',$clientsData->user_id]]);
		if($deleteClient && $deleteUser){
			echo "ok fshirja";
		}
		
	break;

	case 'update':
		$params = Input::get('param');
		$updateUsers = DB::getInstance()->update("users",$params["user_id"],['username'=>$params["username"],'password'=>$params["password"]]);
		
		$updateClients = DB::getInstance()->update("clients",$params["id"],['emer'=>$params["emer"],'mbiemer'=>$params["mbiemer"],'mosha'=>$params["mosha"],'gjinia'=>$params["gjinia"],'vendlindja'=>$params["vendlindja"],'celular'=>$params["celular"],'email'=>$params["email"]]);
		if($updateClients && $updateUsers){
			$success = "ok";
			echo json_encode($success);
		}
		
	break;

	case 'getData':
		$params = Input::get('param');
		$res = array();
		$clientsData  = DB::getInstance()->get('clients',[['id','=',$params['id']]])->firstResult();
		$userData  = DB::getInstance()->get('users',[['id','=',$clientsData->user_id]])->firstResult();
		$obj_merged = (object) array_merge((array) $clientsData, (array) $userData);
		//$clientsData .= $userData;
		echo json_encode($obj_merged);
	break;
	default:	
		# code...
		break;
}









