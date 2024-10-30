<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods:  DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With ');
include_once 'interaction.php';

$del = new Interaction();
$id = $_GET['id'];
if ($del->delete($id)) {
    echo json_encode([
        'status' => 'Data Deleted'
    ]);
} else {
    echo json_encode([
        'status' => 'Data Not Deleted'
    ]);
}
