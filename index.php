<?php 
//connessione database

$host = 'localhost';
$username ='root';
$password = 'root';
$db_name = 'hotel';

//connection

$con = new mysqli($host, $username, $password, $db_name);

//check

if ($conn && $conn->connected_error) {
    die("Connected failed: $conn->connection_error");
}


?>