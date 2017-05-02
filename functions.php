<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
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
			$dataForDT["data"][$i] = [$tableRows->id,$userDataResult->username,$userDataResult->password,$tableRows->emer,$tableRows->mbiemer,$tableRows->mosha,$tableRows->gjinia,$tableRows->vendlindja,$tableRows->celular,$tableRows->email,"<a class=\"shtydjathtas btn btn-info\" id='$tableRows->id' name='mod' href='home.php?page=manage_clinic_card&id=$tableRows->id'>Kartela</a>&nbsp;&nbsp;<a class=\"shtydjathtas btn btn-warning\" id='$tableRows->id' name='mod' href='#'>Modifiko</a>&nbsp;&nbsp;<a class=\"btn btn-danger\" id='$tableRows->id' name='del' href='#'>Fshij</a>"];
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

	case 'manage_clinic_card':
		//var_dump($data);
		$clinic_card_data  = DB::getInstance()->get('clinic_card',[['id_client','=',$data['id']]])->firstResult();
		if ($clinic_card_data==0) {
			$result=array(
			    "exist" => 3,
			    "id" => $data['id']
			);
			echo json_encode($result);
		}else{
		echo json_encode($clinic_card_data);
		}

	break;

	case 'update_clinic_card':
		//var_dump($data);
		//echo "u be ";
		// var_dump($data);
		$clinic_card_data_exist  = DB::getInstance()->get('clinic_card',[['id_client','=',$data['clients']]])->firstResult();
		if($clinic_card_data_exist!=0){
		
		//echo "Klienti u regjistrua me sukses";
		$update_clinic_card = DB::getInstance()->update('clinic_card',$clinic_card_data_exist->id,['id_client'=>$data['clients'],'data_vizites'=>$data['date'],'djathte_larg_sph'=>$data['sdlsph'],'djathte_larg_cyl'=>$data['sdlcyl'],'djathte_larg_axe'=>$data['sdlaxe'],'djathte_afer_sph'=>$data['sdasph'],'djathte_afer_cyl'=>$data['sdacyl'],'djathte_afer_axe'=>$data['sdaaxe'],'majte_larg_sph'=>$data['smlsph'],'majte_larg_cyl'=>$data['smlcyl'],'majte_larg_axe'=>$data['smlaxe'],'majte_afer_sph'=>$data['smasph'],'majte_afer_cyl'=>$data['smacyl'],'majte_afer_axe'=>$data['smaaxe'],'distanca_pupilare_larg'=>$data['dpl'],'distanca_pupilare_afer'=>$data['dpa'],'shenime'=>$data['shenime']]);
		if($update_clinic_card){
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


	case 'getDashboardData':
		//echo "jemi tek dashboard";
		$numberOfClinicCards = DB::getInstance()->getAll('clinic_card')->count();
		$numberOfClients = DB::getInstance()->getAll('clients')->count();
		$numberOfReservations = DB::getInstance()->getAll('reservations')->count();
		$dashboardData = ["clients"=>$numberOfClients,"clinic_cards"=>$numberOfClinicCards,"reservations"=>$numberOfReservations];
		echo json_encode($dashboardData);
	break;


	case 'update_db_on_cron':
		$params = Input::get('dhena');
		//$gjendjet =  $data;
		//$gjendjet =json_decode(json_encode($params), true);
		$gjendjet=(array) json_decode($params);
		//var_dump($gjendjet);
		//echo "kot update";
		//$gjendje = $params['']
		//$artikuj_no = count($artikujt);
		//print_r($artikujt);
		//print_r($artikujt) ; 
		foreach ($gjendjet as $key => $artikull) {
			// $product_exist = DB::getInstance()->get('cmime',[['idprodukti','=',$gjendje['KODARTIKULLI']]])->firstResult();
			//$artikull1=json_decode(json_encode($artikull), true);
			//var_dump($artikull1);
			//echo "hapsire";
			$artikull=(array) $artikull;
			//var_dump($artikull2);

			$product_exist = DB::getInstance()->get('products2',[['kodartikulli','=',$artikull['KODARTIKULLI']]])->firstResult();
			//var_dump($product_exist);
			
			if($product_exist!=0){
				echo "1";


				$delete_product = DB::getInstance()->delete('products2',[['kodartikulli','=',$artikull['KODARTIKULLI']]]);
				// $update_products = DB::getInstance()->insert('products2',[strtolower('KODARTIKULLI')=>$artikull['KODARTIKULLI'],strtolower('PERSHKRIMARTIKULLI')=>$artikull['PERSHKRIMARTIKULLI'],strtolower('PERSHKRIMIANGARTIKULLI')=>$artikull['PERSHKRIMIANGARTIKULLI'],strtolower('KODNJESIA1')=>$artikull['KODNJESIA1'],strtolower('KODNJESIA2')=>$artikull['KODNJESIA2'],strtolower('KOEFICENTARTIKULLI')=>$artikull['KOEFICENTARTIKULLI'],strtolower('MAGAZINA')=>$artikull['MAGAZINA'],strtolower('AKTIV')=>$artikull['AKTIV'],strtolower('KLASA')=>$artikull['KLASA'],strtolower('GRUPI')=>$artikull['GRUPI'],strtolower('NENGRUPI')=>$artikull['NENGRUPI'],strtolower('TVSHKODI')=>$artikull['TVSHKODI'],strtolower('VENDODHJEARTIKULLI')=>$artikull['VENDODHJEARTIKULLI'],strtolower('PERSHKRIMI')=>$artikull['PERSHKRIMI'],strtolower('IMAZH')=>$artikull['IMAZH'],strtolower('VLERATVSH')=>$artikull['VLERATVSH'],strtolower('KODIDOGANORARTIKULLI')=>$artikull['KODIDOGANORARTIKULLI'],strtolower('ARTREF')=>$artikull['ARTREF'],strtolower('KODIFIKIMARTIKULLI')=>$artikull['KODIFIKIMARTIKULLI'],strtolower('KODIFIKIMARTIKULLI2')=>$artikull['KODIFIKIMARTIKULLI2'],strtolower('DTMODIFIKIM')=>$artikull['DTMODIFIKIM'],strtolower('IDSTATUSDOK')=>$artikull['IDSTATUSDOK'],strtolower('PERPESHORE')=>$artikull['PERPESHORE'],strtolower('LLOJGARANCIA')=>$artikull['LLOJGARANCIA'],strtolower('GARANCIA')=>'0']);

				$update_products = DB::getInstance()->insert('products2',[strtolower('KODARTIKULLI')=>$artikull['KODARTIKULLI'],strtolower('PERSHKRIMARTIKULLI')=>$artikull['PERSHKRIMARTIKULLI'],strtolower('PERSHKRIMIANGARTIKULLI')=>$artikull['PERSHKRIMIANGARTIKULLI'],strtolower('KODNJESIA1')=>$artikull['KODNJESIA1'],strtolower('KODNJESIA2')=>$artikull['KODNJESIA2'],strtolower('KOEFICENTARTIKULLI')=>$artikull['KOEFICENTARTIKULLI'],strtolower('MAGAZINA')=>$artikull['MAGAZINA'],strtolower('AKTIV')=>0,strtolower('KLASA')=>$artikull['KLASA'],strtolower('GRUPI')=>$artikull['GRUPI'],strtolower('NENGRUPI')=>$artikull['NENGRUPI'],strtolower('TVSHKODI')=>$artikull['TVSHKODI'],strtolower('VENDODHJEARTIKULLI')=>$artikull['VENDODHJEARTIKULLI'],strtolower('PERSHKRIMI')=>$artikull['PERSHKRIMI'],strtolower('IMAZH')=>$artikull['IMAZH'],strtolower('VLERATVSH')=>$artikull['VLERATVSH'],strtolower('KODIDOGANORARTIKULLI')=>$artikull['KODIDOGANORARTIKULLI'],strtolower('ARTREF')=>$artikull['ARTREF'],strtolower('KODIFIKIMARTIKULLI')=>$artikull['KODIFIKIMARTIKULLI'],strtolower('KODIFIKIMARTIKULLI2')=>$artikull['KODIFIKIMARTIKULLI2'],strtolower('DTMODIFIKIM')=>$artikull['DTMODIFIKIM'],strtolower('IDSTATUSDOK')=>$artikull['IDSTATUSDOK'],strtolower('PERPESHORE')=>0,strtolower('LLOJGARANCIA')=>$artikull['LLOJGARANCIA'],strtolower('GARANCIA')=>$artikull['GARANCIA']]);
				
			}
			
			else{
				echo "2";

				//$insert_into_products = DB::getInstance()->insert('products2',[strtolower('KODARTIKULLI')=>$artikull['KODARTIKULLI'],strtolower('PERSHKRIMARTIKULLI')=>$artikull['PERSHKRIMARTIKULLI'],strtolower('PERSHKRIMIANGARTIKULLI')=>$artikull['PERSHKRIMIANGARTIKULLI'],strtolower('KODNJESIA1')=>$artikull['KODNJESIA1'],strtolower('KODNJESIA2')=>$artikull['KODNJESIA2'],strtolower('KOEFICENTARTIKULLI')=>$artikull['KOEFICENTARTIKULLI'],strtolower('MAGAZINA')=>$artikull['MAGAZINA'],strtolower('AKTIV')=>$artikull['AKTIV'],strtolower('KLASA')=>$artikull['KLASA'],strtolower('GRUPI')=>$artikull['GRUPI'],strtolower('NENGRUPI')=>$artikull['NENGRUPI'],strtolower('TVSHKODI')=>$artikull['TVSHKODI'],strtolower('VENDODHJEARTIKULLI')=>$artikull['VENDODHJEARTIKULLI'],strtolower('PERSHKRIMI')=>$artikull['PERSHKRIMI'],strtolower('IMAZH')=>$artikull['IMAZH'],strtolower('VLERATVSH')=>$artikull['VLERATVSH'],strtolower('KODIDOGANORARTIKULLI')=>$artikull['KODIDOGANORARTIKULLI'],strtolower('ARTREF')=>$artikull['ARTREF'],strtolower('KODIFIKIMARTIKULLI')=>$artikull['KODIFIKIMARTIKULLI'],strtolower('KODIFIKIMARTIKULLI2')=>$artikull['KODIFIKIMARTIKULLI2'],strtolower('DTMODIFIKIM')=>$artikull['DTMODIFIKIM'],strtolower('IDSTATUSDOK')=>$artikull['IDSTATUSDOK'],strtolower('PERPESHORE')=>$artikull['PERPESHORE'],strtolower('LLOJGARANCIA')=>$artikull['LLOJGARANCIA'],strtolower('GARANCIA')=>'0']);

				$update_products = DB::getInstance()->insert('products2',[strtolower('KODARTIKULLI')=>$artikull['KODARTIKULLI'],strtolower('PERSHKRIMARTIKULLI')=>$artikull['PERSHKRIMARTIKULLI'],strtolower('PERSHKRIMIANGARTIKULLI')=>$artikull['PERSHKRIMIANGARTIKULLI'],strtolower('KODNJESIA1')=>$artikull['KODNJESIA1'],strtolower('KODNJESIA2')=>$artikull['KODNJESIA2'],strtolower('KOEFICENTARTIKULLI')=>$artikull['KOEFICENTARTIKULLI'],strtolower('MAGAZINA')=>$artikull['MAGAZINA'],strtolower('AKTIV')=>0,strtolower('KLASA')=>$artikull['KLASA'],strtolower('GRUPI')=>$artikull['GRUPI'],strtolower('NENGRUPI')=>$artikull['NENGRUPI'],strtolower('TVSHKODI')=>$artikull['TVSHKODI'],strtolower('VENDODHJEARTIKULLI')=>$artikull['VENDODHJEARTIKULLI'],strtolower('PERSHKRIMI')=>$artikull['PERSHKRIMI'],strtolower('IMAZH')=>$artikull['IMAZH'],strtolower('VLERATVSH')=>$artikull['VLERATVSH'],strtolower('KODIDOGANORARTIKULLI')=>$artikull['KODIDOGANORARTIKULLI'],strtolower('ARTREF')=>$artikull['ARTREF'],strtolower('KODIFIKIMARTIKULLI')=>$artikull['KODIFIKIMARTIKULLI'],strtolower('KODIFIKIMARTIKULLI2')=>$artikull['KODIFIKIMARTIKULLI2'],strtolower('DTMODIFIKIM')=>$artikull['DTMODIFIKIM'],strtolower('IDSTATUSDOK')=>$artikull['IDSTATUSDOK'],strtolower('PERPESHORE')=>0,strtolower('LLOJGARANCIA')=>$artikull['LLOJGARANCIA'],strtolower('GARANCIA')=>$artikull['GARANCIA']]);
				
			}
		}
		echo "sukses";
		
		
	break;

	case 'manage_doc_times':
		$id=1;
		var_dump($data);
		echo "koti aa2";
		//$updateOraret = DB::getInstance()->update("oraret",$id,['oraret'=>$data]);

		// if($updateOraret){
		// 	$success = "ok";
		// 	echo json_encode($success);
		// }else{
		// 	$success = "not ok";
		// 	echo json_encode($success);
		// }
		
	break;


	default:	
		# code...
		break;
}









