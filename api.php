<?php

include_once 'interaction.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$read = new Interaction;
$id = $_GET['id'];
$result = $read->specific($id);
if (empty($result)) {
    echo json_encode([
        'status' => 'ID not found'
    ]);
} else {
    echo json_encode([
        'status' => 'Data Found',
        'data' =>  $result
    ]);
}
