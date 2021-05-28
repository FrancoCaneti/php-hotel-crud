<?php 
//connessione database

$host = 'localhost';
$username ='root';
$password = 'root';
$dn_name = 'hotel';

//connection

$conn = new mysqli($host, $username, $password, $dn_name);

//check

if ($conn && $conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}
