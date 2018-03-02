<?php
	$servername = "localhost";
	$username   = "root";
	$passward   = "";
	$db_name    = "mysqltraining";
	$link	    =  mysqli_connect($servername,$username,$passward,$db_name);
	if(mysqli_connect_error()){
		die( " Connection error  ".mysqli_connect_error());
	}

	$nm="S . M . ";
	$ml=" Fahad_'_Ahmad";


	$qury = "INSERT INTO `tableone` (`name`,`mail`) 
			VALUES ('".mysqli_real_escape_string($link,$nm)."','".mysqli_real_escape_string($link,$ml)."'  )";
	mysqli_query($link,$qury);

	$qry = "SELECT *
			FROM tableone ";
    if ($result = mysqli_query($link,$qry) ) {
    	   while ($row = mysqli_fetch_array($result)) {
    	   	# code...
    	    
    	   print_r($row);

    	   echo "<br/> Name is ".$row['name']."<br/>E-mail is ".$row['mail'];
    	   echo "<br/> Name is ".$row[1]."<br/>E-mail is ".$row[2];
     } 
 }
mysqli_close($link);
?>