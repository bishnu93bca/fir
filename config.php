<?php

 session_start();
$databaseHost = 'localhost';
$databaseName = 'project';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(!$conn)
{
	echo "no connection";
	die();

}
 
?>
