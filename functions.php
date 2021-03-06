<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once 'core/init.php';
$action = Input::get('action');
$data =  $_POST;

function array_diff_assoc_recursive($array1, $array2)
{
    foreach($array1 as $key => $value)
    {
        if(is_array($value))
        {
              if(!isset($array2[$key]))
              {
                  $difference[$key] = $value;
              }
              elseif(!is_array($array2[$key]))
              {
                  $difference[$key] = $value;
              }
              else
              {
                  $new_diff = array_diff_assoc_recursive($value, $array2[$key]);
                  if($new_diff != FALSE)
                  {
                        $difference[$key] = $new_diff;
                  }
              }
          }
          elseif(!isset($array2[$key]) || $array2[$key] != $value)
          {
              $difference[$key] = $value;
          }
    }
    return !isset($difference) ? 0 : $difference;
}
switch ($action) {

	case 'manage_clients':
		$dataResult = DB::getInstance()->getAll('clients')->results();
		$res = '';
		$dataForDT = ["data"=>[]];
		$i = 0;
		foreach ($dataResult as $tableRows) {
			$userDataResult = DB::getInstance()->get('users',[['id','=',$tableRows->user_id]])->firstResult();
			$dataForDT["data"][$i] = [$tableRows->id,$userDataResult->username,$userDataResult->password,$tableRows->emer,$tableRows->mbiemer,$tableRows->mosha,$tableRows->gjinia,$tableRows->vendlindja,$tableRows->celular,$tableRows->email,"<a class=\"shtydjathtas btn btn-info\" id='$tableRows->id' href='home.php?page=manage_clinic_card&id=$tableRows->id'>Kartela</a>&nbsp;&nbsp;<a class=\"shtydjathtas btn btn-warning\" id='$tableRows->id' name='mod' href='#'>Modifiko</a>&nbsp;&nbsp;<a class=\"btn btn-danger\" id='$tableRows->id' name='del' href='#'>Fshij</a>"];
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
			$userDataResult = DB::getInstance()->get('clients',[['id','=',$tableRows->id_klienti]])->firstResult();
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
		// $clinic_card_data_exist  = DB::getInstance()->get('clinic_card',[['id_client','=',$data['clients']]])->firstResult();

		// if($clinic_card_data_exist==0){
		$user_id  = DB::getInstance()->get('clients',[['id','=',$data['clients']]])->firstResult();
		//echo "string";
		//var_dump($user_id);

		//echo "Klienti u regjistrua me sukses";
		$register_clinic_card = DB::getInstance()->insert('clinic_card',['user_id'=>$user_id->user_id,'id_client'=>$data['clients'],'data_vizites'=>$data['date'],'djathte_larg_sph'=>$data['sdlsph'],'djathte_larg_cyl'=>$data['sdlcyl'],'djathte_larg_axe'=>$data['sdlaxe'],'djathte_afer_sph'=>$data['sdasph'],'djathte_afer_cyl'=>$data['sdacyl'],'djathte_afer_axe'=>$data['sdaaxe'],'majte_larg_sph'=>$data['smlsph'],'majte_larg_cyl'=>$data['smlcyl'],'majte_larg_axe'=>$data['smlaxe'],'majte_afer_sph'=>$data['smasph'],'majte_afer_cyl'=>$data['smacyl'],'majte_afer_axe'=>$data['smaaxe'],'distanca_pupilare_larg'=>$data['dpl'],'distanca_pupilare_afer'=>$data['dpa'],'shenime'=>$data['shenime']]);
		if($register_clinic_card){
			$responserc="1";
			//echo json_encode($responserc);
			echo $responserc;
			}else{
			$responserc="3";
			//echo json_encode($responserc);
			echo $responserc;
		}

	break;


	case 'manage_clinic_card':
		//var_dump($data['id']);
		$clinic_card_data  = DB::getInstance()->get('clinic_card',[['id_client','=',$data['id']]])->results();
		if (empty($clinic_card_data)) {
			$result=array(
			    "exist" => 3,
			    "id" => $data['id']
			);
			echo json_encode($result);
		}else{
			//var_dump($clinic_card_data);
			//echo $clinic_card_data;
		echo json_encode($clinic_card_data);
		}

	break;

	case 'update_clinic_card':
		//var_dump($data);
		//echo $data['id'];
		// var_dump($data);
		// $clinic_card_data_exist  = DB::getInstance()->get('clinic_card',[['id_client','=',$data['clients']]])->firstResult();
		// if($clinic_card_data_exist!=0){
		
		//echo "Klienti u regjistrua me sukses";
		$update_clinic_card = DB::getInstance()->update('clinic_card',$data['id'],['id_client'=>$data['id_client'],'user_id'=>$data['user_id'],'data_vizites'=>$data['date'],'djathte_larg_sph'=>$data['sdlsph'],'djathte_larg_cyl'=>$data['sdlcyl'],'djathte_larg_axe'=>$data['sdlaxe'],'djathte_afer_sph'=>$data['sdasph'],'djathte_afer_cyl'=>$data['sdacyl'],'djathte_afer_axe'=>$data['sdaaxe'],'majte_larg_sph'=>$data['smlsph'],'majte_larg_cyl'=>$data['smlcyl'],'majte_larg_axe'=>$data['smlaxe'],'majte_afer_sph'=>$data['smasph'],'majte_afer_cyl'=>$data['smacyl'],'majte_afer_axe'=>$data['smaaxe'],'distanca_pupilare_larg'=>$data['dpl'],'distanca_pupilare_afer'=>$data['dpa'],'shenime'=>$data['shenime']]);
		if($update_clinic_card){
			$responserc="1";
			//echo json_encode($responserc);
			echo $responserc;
		
		}else{
			$responserc="3";
			//echo json_encode($responserc);
			echo $responserc;
		}



	break;


	case 'getDashboardData':
		//echo "jemi tek dashboard";
		$numberOfClinicCards = DB::getInstance()->getAll('clinic_card')->count();
		$numberOfClients = DB::getInstance()->getAll('clients')->count();
		$numberOfReservations = DB::getInstance()->getAll('reservations')->count();
		$dashboardData = ["clients"=>$numberOfClients,"clinic_cards"=>$numberOfClinicCards,"reservations"=>$numberOfReservations];
		echo json_encode($dashboardData);
	break;

	case 'manage_doc_times':
		$id=1;
		//var_dump($data);
		//echo "koti aa2";
		$updateOraret = DB::getInstance()->update("oraret",$id,['oraret'=>$data['data']]);

		if($updateOraret){
			$success = "1";
			echo $success;
		}else{
			$success = "2";
			echo $success;
		}
		
	break;

	case 'manage_cmimi_filter':
		//var_dump($data);
		//echo "u be ";
		//var_dump($data);

		$updateCmimiFilter = DB::getInstance()->update("cmimifilter",1,['cmimimax'=>$data["diellMax"],'cmimimin'=>$data["diellMin"]]);
		$updateCmimiFilter = DB::getInstance()->update("cmimifilter",2,['cmimimax'=>$data["optikeMax"],'cmimimin'=>$data["optikeMin"]]);
		$updateCmimiFilter = DB::getInstance()->update("cmimifilter",3,['cmimimax'=>$data["lenteMax"],'cmimimin'=>$data["lenteMin"]]);
		

		if($updateCmimiFilter){
			$responserc="1";
			//echo json_encode($responserc);
			echo $responserc;
		}else{
			$responserc="2";
			//echo json_encode($responserc);
			echo $responserc;
		}



	break;


	case 'manage_store_times':
		//var_dump($data);
		//echo "u be ";
		//var_dump($data);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'qtu',['hene'=>$data["qtuhene"],'marte'=>$data["qtumarte"],'merkure'=>$data["qtumerkure"],'enjte'=>$data["qtuenjte"],'premte'=>$data["qtupremte"],'shtune'=>$data["qtushtune"],'diele'=>$data["qtudiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'mshyri',['hene'=>$data["mshyrihene"],'marte'=>$data["mshyrimarte"],'merkure'=>$data["mshyrimerkure"],'enjte'=>$data["mshyrienjte"],'premte'=>$data["mshyripremte"],'shtune'=>$data["mshyrishtune"],'diele'=>$data["mshyridiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'sheshiwillson',['hene'=>$data["sheshiwillsonhene"],'marte'=>$data["sheshiwillsonmarte"],'merkure'=>$data["sheshiwillsonmerkure"],'enjte'=>$data["sheshiwillsonenjte"],'premte'=>$data["sheshiwillsonpremte"],'shtune'=>$data["sheshiwillsonshtune"],'diele'=>$data["sheshiwillsondiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'dhjetori',['hene'=>$data["dhjetorihene"],'marte'=>$data["dhjetorimarte"],'merkure'=>$data["dhjetorimerkure"],'enjte'=>$data["dhjetorienjte"],'premte'=>$data["dhjetoripremte"],'shtune'=>$data["dhjetorishtune"],'diele'=>$data["dhjetoridiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'durres',['hene'=>$data["durreshene"],'marte'=>$data["durresmarte"],'merkure'=>$data["durresmerkure"],'enjte'=>$data["durresenjte"],'premte'=>$data["durrespremte"],'shtune'=>$data["durresshtune"],'diele'=>$data["durresdiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'pogradec',['hene'=>$data["pogradechene"],'marte'=>$data["pogradecmarte"],'merkure'=>$data["pogradecmerkure"],'enjte'=>$data["pogradecenjte"],'premte'=>$data["pogradecpremte"],'shtune'=>$data["pogradecshtune"],'diele'=>$data["pogradecdiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'shkoder',['hene'=>$data["shkoderhene"],'marte'=>$data["shkodermarte"],'merkure'=>$data["shkodermerkure"],'enjte'=>$data["shkoderenjte"],'premte'=>$data["shkoderpremte"],'shtune'=>$data["shkodershtune"],'diele'=>$data["shkoderdiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'lushnje',['hene'=>$data["lushnjehene"],'marte'=>$data["lushnjemarte"],'merkure'=>$data["lushnjemerkure"],'enjte'=>$data["lushnjeenjte"],'premte'=>$data["lushnjepremte"],'shtune'=>$data["lushnjeshtune"],'diele'=>$data["lushnjediele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'vlore',['hene'=>$data["vlorehene"],'marte'=>$data["vloremarte"],'merkure'=>$data["vloremerkure"],'enjte'=>$data["vloreenjte"],'premte'=>$data["vlorepremte"],'shtune'=>$data["vloreshtune"],'diele'=>$data["vlorediele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'fier',['hene'=>$data["fierhene"],'marte'=>$data["fiermarte"],'merkure'=>$data["fiermerkure"],'enjte'=>$data["fierenjte"],'premte'=>$data["fierpremte"],'shtune'=>$data["fiershtune"],'diele'=>$data["fierdiele"]]);

		$updateCmimiFilter = DB::getInstance()->updateOrarDyqani("oraridyqan",'sarande',['hene'=>$data["sarandehene"],'marte'=>$data["sarandemarte"],'merkure'=>$data["sarandemerkure"],'enjte'=>$data["sarandeenjte"],'premte'=>$data["sarandepremte"],'shtune'=>$data["sarandeshtune"],'diele'=>$data["sarandediele"]]);
		

		if($updateCmimiFilter){
			$responserc="1";
			//echo json_encode($responserc);
			echo $responserc;
		}else{
			$responserc="2";
			//echo json_encode($responserc);
			echo $responserc;
		}



	break;

	default:	
		# code...
		break;
}









