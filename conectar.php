<?php

	$dbhost = "mysql6.000webhost.com";
	$dbuser = "a5462179_plr";
	$dbpass = "9712645a";
	$dbname = "a5462179_plr";
	try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,  
				     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(Exception $error) {
		//die("Error conexión BBDD " . $error->getMessage());
	}	
?>

