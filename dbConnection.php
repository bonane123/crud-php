<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'crud';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if(!$mysqli){
    die("Could not connect to database " .mysqli_connect_error()); 
}

echo "Database connected  successfully";
?>