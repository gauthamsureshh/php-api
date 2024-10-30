<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods:  PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With ');

include_once 'interaction.php';

$update = new Interaction();


$data = json_decode(file_get_contents('php://input'), true);



$id = $_GET['id'];
if ($update->update($data['name'], $id)) {
    echo json_encode([
        'status' => 'Data Updated'
    ]);
} else {
    echo json_encode([
        'status' => 'Data Update Failed'
    ]);
}
