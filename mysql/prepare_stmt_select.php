<?php
	 $link = mysqli_connect("localhost","root","","experiment");
	 if(mysqli_connect_error()){
	 	echo "pronblem caught";
	 }
	 else{
	 	echo "Connected <br/>";
	 }
	 $qry = "SELECT `name`,`skill` 
	 		 FROM `tbl_experiment`";
	 $stmt = $link->prepare($qry);
	 $stmt->execute();
	 $stmt->bind_result($nme,$skl);
	 while ($stmt->fetch()) {
	 	echo $skl."<br/>";
	 }
?>