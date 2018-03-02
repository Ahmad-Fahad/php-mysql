<?php
	$dataSourceName = "mysql:dbname=experiment;host=localhost;";
	$username       = "root";
	$passward		="";

	
	try{
		$pdo = new PDO($dataSourceName,$username,$passward);

	}
	catch(PDOException $e){
		echo "Error : ".$e;
	}
	echo "COnnected";

?>