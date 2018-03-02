<?php
 
try{
	$pdo = new PDO("mysql:dbname=db_blog;host=localhost;","root","");
}
catch(PDOException $e){
	echo "Error";
}
	echo "<br/>";
	$qry = "SELECT `body` 
			FROM `dbl_post`
			WHERE id=2";
	$result = $pdo->query($qry);
	foreach ($result as $key ) {
		echo $key['body']."<br/>";
	}

?>