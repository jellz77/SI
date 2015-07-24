<?php

class MpModel{		
	function __construct(){		
		/* this is where results would go after query is run*/									
	}
	function show($clnt,$mttr){		
		//use prepare instead below			
		$db=Db::getInstance();
		$req=$db->prepare("SELECT * FROM matter WHERE clnt=:clnt and mttr=:mttr");						
		$req->execute(array('clnt'=>$clnt,'mttr'=>$mttr));		
		$row=$req->fetch();		
		return 'this is ' . $row['mmdesc'];
	}
	function coddsc(){
		$db=Db::getInstance();
		$list[]='';
		$req=$db->query("SELECT dddesc FROM coddsc");
		foreach($req->fetchAll() as $row){
			$list[]=$row['dddesc'];
		}		
		return $list;
	}
}

?>