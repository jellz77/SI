<?php

class MpController{
	

	public function view(){
		$clnt=isset($_GET['clnt']) ? $_GET['clnt'] : '';
		$mttr=isset($_GET['mttr']) ? $_GET['mttr'] : '';
		require_once('models/mpmodel.php');		
		$mp=MpModel::show($clnt,$mttr);		
		$mp1=MpModel::coddsc();
		require_once('views/pages/mp.php');	
	}

}

?>