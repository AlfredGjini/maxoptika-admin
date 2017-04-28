<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once 'core/init.php';

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

?>