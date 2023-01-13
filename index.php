<?php
	//$uri = $_SERVER['HTTP_HOST'];
	//header('Location: '.$uri."/tpUser/");
	//exit;

	session_start();
	
	require('./Model/Connection.php');
	require('./Controller/UserController.php');
	
	$pdoBuilder = new Connection();
	$db = $pdoBuilder->GetDb();

	 if(
	 	(isset($_GET['ctrl']) && !empty($_GET['ctrl']))&&
	 	(isset($_GET['action'])&& !empty($_GET['action']))
	 ){
		$ctrl = $_GET['ctrl'];
		$action = $_GET['action'];
		//error_log(print_r($action,true));
        
		//error_log(print_r($ctrl,true));
		//$action='test';
	}
	 else{
	 	$ctrl = 'category'; 
	 	$action = 'goHome';
	 }

	$ctrl ='UserController';
	$controller = new $ctrl($db);
	$controller->$action();

?>