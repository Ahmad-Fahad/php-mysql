<?php
 $link = mysqli_connect("localhost","root","","experiment");
	 if(mysqli_connect_error()){
	 	echo "pronblem caught";
	 }
	 else{
	 	echo "Connected <br/>";
	 }
	 $qry  = "INSERT INTO `tbl_experiment`(`name`,`skill`)
	          VALUES(?,?)";
	 $stmt =  $link -> prepare($qry);
     $stmt -> bind_param("ss",$nme,$skl);
     $nme = "Rafi";
     $skl = "Android";
     $stmt->execute();
     $stmt->close();
     $link->close();
?>