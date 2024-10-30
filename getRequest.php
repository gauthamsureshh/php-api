<?php

include_once 'interaction.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$read = new Interaction;
$result = $read->getRequest();

if (!empty($result)) {
    echo json_encode([
        'status' => 'Data Found',
        'data' => $result
    ]);
} else {
    echo json_encode([
        'status' => 'Data not Found'
    ]);
}
