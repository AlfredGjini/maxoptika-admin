<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
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
			$dataForDT["data"][$i] = [$tableRows->id,$userDataResult->username,$userDataResult->password,$tableRows->emer,$tableRows->mbiemer,$tableRows->mosha,$tableRows->gjinia,$tableRows->vendlindja,$tableRows->celular,$tableRows->email,"<a class=\"btn btn-warning pull-left\" id='$tableRows->id' name='mod' href='#'>Modifiko</a>&nbsp;&nbsp;<a class=\"btn btn-danger pull-right\" id='$tableRows->id' name='del' href='#'>Fshij</a>"];
			$i++;
		}
		echo json_encode($dataForDT);	
	break;
	
	case 'register_clients':
		$emailExist  = DB::getInstance()->get('clients',[['email','=',$data['email']]])->firstResult();
		//echo "u be ";
		//var_dump($emailExist);
		if($emailExist==0){
		if($data['username'] && $data['password'] && $data['emer']){
		$register_user = DB::getInstance()->insert('users',['name'=>$data['emer'],'username'=>$data['username'],'emailval'=>$data['email'],'password'=>$data['password']]);
		if($register_user){
			$userDataResult = DB::getInstance()->get('users',[['emailval','=',$data['email']]])->firstResult();
			//echo "Klienti u regjistrua me sukses";
			$register_client = DB::getInstance()->insert('clients',['emer'=>$data['emer'],'mbiemer'=>$data['mbiemer'],'mosha'=>$data['mosha'],'gjinia'=>$data['gjinia'],'vendlindja'=>$data['vendlindja'],'celular'=>$data['celular'],'email'=>$data['email'],'user_id'=>$userDataResult->id]);
			if($register_client){
				$responserc="1";
				//echo json_encode($responserc);
				echo $responserc;
			}
		}
		}
		else{
			$responserc="2";
			//echo json_encode($responserc);
			echo $responserc;
		}
		}else{
			$responserc="3";
			//echo json_encode($responserc);
			echo $responserc;
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
		}else{
			$success = "not ok";
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

	case 'manage_reservations':
		$dataResult = DB::getInstance()->getAll('reservations')->results();
		$res = '';
		$dataForDT = ["data"=>[]];
		$i = 0;
		foreach ($dataResult as $tableRows) {
			$userDataResult = DB::getInstance()->get('clients',[['user_id','=',$tableRows->id_klienti]])->firstResult();
			if($tableRows->aprovuar=="jo"){
			$dataForDT["data"][$i] = [$tableRows->id,$userDataResult->emer." ".$userDataResult->mbiemer,$tableRows->data,$tableRows->ora,$tableRows->dyqani,$tableRows->shenime,"<button type=\"button\" class=\"btn btn-danger\">JO</button>","<a class=\"btn btn-warning pull-left\" id='$tableRows->id' name='modReservation' href='#'>Modifiko</a>&nbsp;&nbsp;<a class=\"btn btn-danger pull-right\" id='$tableRows->id' name='delReservation' href='#'>Fshij</a>"];
		}else {
			$dataForDT["data"][$i] = [$tableRows->id,$userDataResult->emer." ".$userDataResult->mbiemer,$tableRows->data,$tableRows->ora,$tableRows->dyqani,$tableRows->shenime,"<button type=\"button\" class=\"btn btn-success\">PO</button>","<a class=\"btn btn-warning pull-left\" id='$tableRows->id' name='modReservation' href='#'>Modifiko</a>&nbsp;&nbsp;<a class=\"btn btn-danger pull-right\" id='$tableRows->id' name='delReservation' href='#'>Fshij</a>"];
		}
			$i++;
		
		}
		echo json_encode($dataForDT);	
	break;

	case 'delReservation':
		$params = Input::get('param');
		$deleteReservation = DB::getInstance()->delete('reservations',[['id','=',$params['id']]]);
		if($deleteReservation){
			echo "ok fshirja";
		}
		
	break;

	case 'getDataReservation':
		$params = Input::get('param');
		$res = array();
		$reservationsData  = DB::getInstance()->get('reservations',[['id','=',$params['id']]])->firstResult();
		$clientsData  = DB::getInstance()->get('clients',[['user_id','=',$reservationsData->id_klienti]])->firstResult();
		$obj_merged = (object) array_merge((array) $reservationsData, (array) $clientsData);
		//$clientsData .= $userData;
		echo json_encode($obj_merged);
	break;

	case 'updateReservations':
		$params = Input::get('param');
		$updateReservations = DB::getInstance()->update("reservations",$params["id"],['dyqani'=>$params["dyqani"],'shenime'=>$params["shenime"],'data'=>$params["data"],'aprovuar'=>$params["aprovo"],'ora'=>$params["ora"]]);
		echo $params["ora"]." ".$params["data"];
		
		//$updateClients = DB::getInstance()->update("clients",$params["id"],['emer'=>$params["emer"],'mbiemer'=>$params["mbiemer"],'mosha'=>$params["mosha"],'gjinia'=>$params["gjinia"],'vendlindja'=>$params["vendlindja"],'celular'=>$params["celular"],'email'=>$params["email"]]);
		if($updateReservations){
			$success = "ok";
			echo json_encode($success);
		}else{
			$success = "not ok";
			echo json_encode($success);
		}
		
	break;

	case 'create_clinic_card':
		//var_dump($data);
		//echo "u be ";
		// var_dump($data);
		$clinic_card_data_exist  = DB::getInstance()->get('clinic_card',[['id_client','=',$data['clients']]])->firstResult();
		if($clinic_card_data_exist==0){
		
		//echo "Klienti u regjistrua me sukses";
		$register_clinic_card = DB::getInstance()->insert('clinic_card',['id_client'=>$data['clients'],'data_vizites'=>$data['date'],'djathte_larg_sph'=>$data['sdlsph'],'djathte_larg_cyl'=>$data['sdlcyl'],'djathte_larg_axe'=>$data['sdlaxe'],'djathte_afer_sph'=>$data['sdasph'],'djathte_afer_cyl'=>$data['sdacyl'],'djathte_afer_axe'=>$data['sdaaxe'],'majte_larg_sph'=>$data['smlsph'],'majte_larg_cyl'=>$data['smlcyl'],'majte_larg_axe'=>$data['smlaxe'],'majte_afer_sph'=>$data['smasph'],'majte_afer_cyl'=>$data['smacyl'],'majte_afer_axe'=>$data['smaaxe'],'distanca_pupilare_larg'=>$data['dpl'],'distanca_pupilare_afer'=>$data['dpa'],'shenime'=>$data['shenime']]);
		if($register_clinic_card){
			$responserc="1";
			//echo json_encode($responserc);
			echo $responserc;
		}
		}else{
			$responserc="3";
			//echo json_encode($responserc);
			echo $responserc;
		}



	break;

	default:	
		# code...
		break;
}









