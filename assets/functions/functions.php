<?php

function cmurl(){

	$clnt=isset($_GET['clnt']) ? $_GET['clnt'] : '';
	$mttr=isset($_GET['mttr']) ? $_GET['mttr'] : '';
	if($clnt!=''&&$mttr!=''){
		$cmurl="&clnt=" . $clnt . "&mttr=" . $mttr;	
		echo $cmurl;
	}	
}
?>