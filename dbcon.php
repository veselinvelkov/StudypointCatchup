<!--This file connects to the database. We create it once and include this php file into the others.  -->

<?php

$databaseHost = 'localhost';
$databaseName = 'crud';
$databaseUsername = 'root';
$databasePassword = 'root';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>
