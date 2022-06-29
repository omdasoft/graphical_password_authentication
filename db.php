<?php 
	$server="localhost";
	$user="root";
	$password="";
	$database="gpas_final";
	$con=mysqli_connect($server,$user,$password,$database);
	if(!$con)
		echo 'Connection failed !';

	// $db_host = "localhost";
	// $db_user = "root";
	// $db_pass = "";
	// $db_name = "gpas_final";

	// $conn = new \PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pass,
	// array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

	// if(!$conn) 
	// 	echo "connection faild";
?>
	