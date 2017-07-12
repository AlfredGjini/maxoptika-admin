<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once 'core/init.php';

$params = Input::get('dhena1');
$params2 = Input::get('dhena2');
$params3 = Input::get('dhena3');
		//$gjendjet =  $data;
		//$gjendjet =json_decode(json_encode($params), true);
		$gjendjet=(array) json_decode($params);
		$cmimet=(array) json_decode($params2);
		$magazinat=(array) json_decode($params3);
		//var_dump($gjendjet);
		//echo "kot update";
		//$gjendje = $params['']
		//$artikuj_no = count($artikujt);
		//print_r($artikujt);
		//print_r($artikujt) ; 

		// Insert or update new products
		$delete_product = DB::getInstance()->deleteAll('products2');
		foreach ($gjendjet as $key => $artikull) {
			// $product_exist = DB::getInstance()->get('cmime',[['idprodukti','=',$gjendje['KODARTIKULLI']]])->firstResult();
			//$artikull1=json_decode(json_encode($artikull), true);
			//var_dump($artikull1);
			//echo "hapsire";
			$artikull=(array) $artikull;
			//var_dump($artikull2);

			//$product_exist = DB::getInstance()->get('products2',[['kodartikulli','=',$artikull['KODARTIKULLI']]])->firstResult();
			//var_dump($product_exist);
			
			// if($product_exist!=0){
				// echo "1";
				// if ($artikull['AKTIV']==true) {
				// 	$aktiv=1;
				// }else{
				// 	$aktiv=0;
				// }

				$aktiv=1;


				

				$update_products = DB::getInstance()->insert('products2',[strtolower('KODARTIKULLI')=>$artikull['KODARTIKULLI'],strtolower('PERSHKRIMARTIKULLI')=>$artikull['PERSHKRIMARTIKULLI'],strtolower('PERSHKRIMIANGARTIKULLI')=>$artikull['PERSHKRIMIANGARTIKULLI'],strtolower('KODNJESIA1')=>$artikull['KODNJESIA1'],strtolower('KODNJESIA2')=>$artikull['KODNJESIA2'],strtolower('KOEFICENTARTIKULLI')=>$artikull['KOEFICENTARTIKULLI'],strtolower('MAGAZINA')=>$artikull['MAGAZINA'],strtolower('AKTIV')=>$aktiv,strtolower('KLASA')=>$artikull['KLASA'],strtolower('GRUPI')=>$artikull['GRUPI'],strtolower('NENGRUPI')=>$artikull['NENGRUPI'],strtolower('TVSHKODI')=>$artikull['TVSHKODI'],strtolower('VENDODHJEARTIKULLI')=>$artikull['VENDODHJEARTIKULLI'],strtolower('PERSHKRIMI')=>$artikull['PERSHKRIMI'],strtolower('IMAZH')=>$artikull['IMAZH'],strtolower('VLERATVSH')=>$artikull['VLERATVSH'],strtolower('KODIDOGANORARTIKULLI')=>$artikull['KODIDOGANORARTIKULLI'],strtolower('ARTREF')=>$artikull['ARTREF'],strtolower('KODIFIKIMARTIKULLI')=>$artikull['KODIFIKIMARTIKULLI'],strtolower('KODIFIKIMARTIKULLI2')=>$artikull['KODIFIKIMARTIKULLI2'],strtolower('DTMODIFIKIM')=>$artikull['DTMODIFIKIM'],strtolower('IDSTATUSDOK')=>$artikull['IDSTATUSDOK'],strtolower('PERPESHORE')=>1,strtolower('LLOJGARANCIA')=>$artikull['LLOJGARANCIA'],strtolower('GARANCIA')=>$artikull['GARANCIA'],strtolower('ORIGJINEARTIKULLI')=>$artikull['ORIGJINEARTIKULLI'],strtolower('SHASIA')=>$artikull['SHASIA'],strtolower('ZONAKADASTRALE')=>$artikull['ZONAKADASTRALE'],strtolower('MARKA')=>$artikull['MARKA'],strtolower('VITPRODHIMI')=>$artikull['VITPRODHIMI']]);
				

		}
		//echo "sukseseee2";

		// Insert or update new cmime
		$delete_cmimet = DB::getInstance()->deleteAll('cmime2');
		foreach ($cmimet as $key => $cmimi) {
			// $product_exist = DB::getInstance()->get('cmime',[['idprodukti','=',$gjendje['KODARTIKULLI']]])->firstResult();
			//$artikull1=json_decode(json_encode($artikull), true);
			//var_dump($artikull1);
			//echo "hapsire";
			$cmimi=(array) $cmimi;
			//var_dump($artikull2);


				$update_products = DB::getInstance()->insert('cmime2',['idprodukti'=>$cmimi['KODARTIKULLI'],'cmimi'=>$cmimi['CMIMI'],'monedha'=>$cmimi['MONEDHAKOD']]);

		}


		// Insert or update new magazina
		$delete_magazina = DB::getInstance()->deleteAll('magazina');
		foreach ($magazinat as $key => $magazina) {
			// $product_exist = DB::getInstance()->get('cmime',[['idprodukti','=',$gjendje['KODARTIKULLI']]])->firstResult();
			//$artikull1=json_decode(json_encode($artikull), true);
			//var_dump($artikull1);
			//echo "hapsire";
			$magazina=(array) $magazina;
			//var_dump($artikull2);
	

				$update_products = DB::getInstance()->insert('magazina',['kodartikull'=>$magazina['KODARTIKULLI'],'sasia'=>$magazina['gjendje'],'njesia'=>$magazina['KODNJESIA1']]);

		}




?>