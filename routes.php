<?php

function call($controller,$action){
	require_once('controllers/' . $controller . 'controller.php');	
	switch ($controller){
		case 'mp':
			$controller=new MpController();
			break;
		case 'address':
			$controller = new AddressController();
			break;
		case 'parties':
			$controller = new PartiesController();
			break;
		case 'matterentry':			
			$controller= new MatterEntryController();

	}
	$controller->{$action}();
}

// NEED TO BUILD LOGIC TO MAKE SURE THE CONTROLLER AND ACTION ARE LEGIT ELSE SHOW ERROR PAGE
call($controller,$action);

?>