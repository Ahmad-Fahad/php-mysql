<?php
	$servername = "localhost";
	$username   = "root";
	$passward   = "";
	$db_name    = "mysqltraining";
	$link	    =  mysqli_connect($servername,$username,$passward,$db_name);
	if(mysqli_connect_error()){
		die( " Connection error  ".mysqli_connect_error());
	}
	echo "select all print first row<br/>";
	$qry = "SELECT *
			FROM `tableOne` ";
    if ($result = mysqli_query($link,$qry) ) {
    	   $row = mysqli_fetch_array($result);
    	   print_r($row);

    	   echo "<br/> Name is ".$row['name']."<br/>E-mail is ".$row['mail'];
    	   echo "<br/> Name is ".$row[1]."<br/>E-mail is ".$row[2];
     } 
     echo "<br/>select multiple row<br/>";
     $qry = "SELECT `mail` 
     		 FROM `tableOne` 
     		 WHERE `name` = 'Ahmad' ";
     if($result=mysqli_query($link,$qry)){
     	while ($row = mysqli_fetch_array($result)) {
 				print_r($row);
     	 }  
     	
     	 print_r($row);
     }
       echo "<br/>select data using variable<br/>";
      $nm="Sultan";
      $qry = "SELECT `mail` 
			  FROM 	`tableone` 
			  WHERE `name` = '".$nm."'";
		$result = mysqli_query($link,$qry);
		$row  = mysqli_fetch_array($result);
		print_r($row);
	   echo "<br/>select data using % <br/>";
	   $qry = "SELECT `name` 
	   		   FROM `tableOne`
	   		   WHERE `mail` 
	   		   LIKE '%@outlook.com'";
	   if($result = mysqli_query($link,$qry)){
	   	while ($row = mysqli_fetch_array($result)){
	   		print_r($row);
	   	}
	   }
	   echo "<br/>select data using multiple condition <br/>";
	   $qry = "SELECT `mail`
	   		   FROM `tableOne`
	   		   WHERE `id` >= 3 
	   		   AND `name` = 'Tipu' ";
	$result = mysqli_query($link,$qry);
	$row    = mysqli_fetch_array($result);
	print_r($row);
mysqli_close($link);
?>