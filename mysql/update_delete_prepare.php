<?php
	include "pdo_connect.php";
	$skl = "Andoid";
	$id  = 2;
	$qry = "UPDATE tbl_experiment 
			SET `skill`=? 
			WHERE id=?";
    $stmt = $pdo->prepare($qry);
    $stmt->execute(array($skl,$id));
    	$skl = "Andoid";
	    $id  = 6;
    	$qry = "UPDATE tbl_experiment 
			SET `skill`=:skl 
			WHERE id=:id";
    $stmt = $pdo->prepare($qry);
    $stmt->bindParam(':skl',$skl);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $d=13;
    $qry = "DELETE FROM tbl_experiment
    		WHERE id=?";
    $stmt=$pdo->prepare($qry);
    $stmt->bindParam(1,$d);
    $stmt->execute();
?>