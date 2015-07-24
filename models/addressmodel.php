<?php

class AddressModel{		
	function __construct(){		
		/* this is where results would go after query is run*/									
	}
	function show($clnt,$mttr){		
		//use prepare instead below			
		$db=Db::getInstance();
		$req=$db->prepare("SELECT * FROM address WHERE clnt=:clnt and mttr=:mttr");				
		//$req=$db->query("SELECT * FROM matter WHERE clnt='" . $clnt . "' and mttr='" . $mttr . "'");		
		$req->execute(array('clnt'=>$clnt,'mttr'=>$mttr));
		//$req->execute(array('clnt' => $clnt));		
		$row=$req->fetch();
		//foreach($req->fetchAll() as $row){
			//$result=$row['clnt'] . ' - ' . $row['mttr'] . ' - ' . $row['mmdesc'];
		//}
		return 'this is ' . $row['mmdesc'];
	}
	
}

?>