<?php


$databaseHost = 'localhost';
$databaseName = 'notification';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(!$conn)
{
	echo "no connection";
	die();

}
 
?>
