<?php
//get details room
require_once __DIR__ . '/database.php';

//room Id 

$id = empty($_GET['id']) ? false : $_GET['id'];

if($id) {
    
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result && $result->num_rows > 0){
        $stanza = $result->fetch_assoc();
        //var_dump($stanza);
    }
}

//close DB connection

$conn ->close();