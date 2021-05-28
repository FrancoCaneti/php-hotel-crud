<?php
require_once __DIR__ . '/database.php';

$sql = "SELECT `id`, `room_number`, `floor`,`beds` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0) {
    $stanze = [];
    while($row = $result->fetch_assoc()) {
        $stanze[] = $row;
    }
    //var_dump($stanze);
} else {
    echo 'query error';
}

$conn->close();