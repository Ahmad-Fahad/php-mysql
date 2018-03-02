<?php
	$servername = "localhost";
	$username   = "root";
	$passward   = "";
	$db_name    = "dbase";
	$link	    =  mysqli_connect($servername,$username,$passward,$db_name);
	if(mysqli_connect_error()){
		die("Connection error  ".mysqli_connect_error());
	}
$sql = "CREATE TABLE P
(
PersonID int,
LastName varchar(255),
FirstName varchar(255),
Address varchar(255),
City varchar(255)
)";
	mysqli_query($link,$sql);

?>