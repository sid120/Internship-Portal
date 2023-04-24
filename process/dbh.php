<?php

// $servername = "database-1.cvvl5ywqez5f.us-east-1.rds.amazonaws.com";
// $dBUsername = "admin";
// $dbPassword = "12345678";
// $dBName = "database-1";

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "mydatabase";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>