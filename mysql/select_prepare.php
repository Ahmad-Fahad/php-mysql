<?php
	include "pdo_connect.php";
	echo "<br/>";
	$id = 12;
	$qry = "SELECT `name`,`skill` 
	        FROM  `tbl_experiment`
			WHERE id = :id";
	$stmt = $pdo->prepare($qry);
	$stmt->execute(array(':id'=>$id));
	while($data = $stmt->fetch()){
		echo "Nmae :".$data['name'];
	}
	$i=1;
	$qry = "SELECT `name`,`skill` 
	        FROM  `tbl_experiment`
			WHERE id = ?";
	$stmt = $pdo->prepare($qry);
	$stmt->execute(array($i));
	while($data = $stmt->fetch()){
		echo "<br/>Nmae :".$data['name'];
	}
	$d=5;
	$qry = "SELECT `name`,`skill` 
	        FROM  `tbl_experiment`
			WHERE id = ?";
	$stmt = $pdo->prepare($qry);
	$stmt->bindParam(1,$d);
	$stmt->execute();
	while($data = $stmt->fetch()){
		echo "<br/>Nmae :".$data['name'];
	}
?>