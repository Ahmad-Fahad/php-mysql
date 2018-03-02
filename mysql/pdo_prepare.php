<?php
include "pdo_connect.php";
	$nme = "sifat";
	$skill = "C,C++,Java";
	$qry = "INSERT INTO `tbl_experiment`(`name`,`skill`)
			VALUES(:nme,:skl)";
	$stmt = $pdo->prepare($qry);
	$stmt->bindParam(':nme',$nme,PDO::PARAM_STR);
	$stmt->bindParam(':skl',$skill,PDO::PARAM_STR);
	$stmt->execute();

	$qry = "INSERT INTO `tbl_experiment`(`name`,`skill`)
			VALUES(?,?)";
	$stmt = $pdo->prepare($qry);
	$arr =  array($nme,$skill);
    $stmt->execute($arr);

    $qry = "INSERT INTO `tbl_experiment`(`name`,`skill`)
			VALUES(:nme,:skl)";
	$stmt = $pdo->prepare($qry);
	$stmt->bindValue(':nme',"Arafat" );
	$stmt->bindValue(':skl',$skill );
	$stmt->execute();

?>