<?php
	$servername = "localhost";
	$username   = "root";
	$passward   = "";
	$db_name    = "mysqltraining";
	$link	    =  mysqli_connect($servername,$username,$passward,$db_name);
	if(mysqli_connect_error()){
		die( " Connection error  ".mysqli_connect_error());
	}


	$nm= "Sultan";
	$ml= "www@imirat.com";
	$id= 10;

	 $qry = "UPDATE `tableone`
	 		 SET `mail` = '".$ml."'
	 		 WHERE `name`= '".$nm."'";

	 mysqli_query($link,$qry);



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