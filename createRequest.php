<?php

include_once 'interaction.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods:  POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With ');

$create = new Interaction;

$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];

if ($create->create($name, $age, $address)) {
    echo json_encode([
        'status' => 'Data Added'
    ]);
} else {
    echo json_encode([
        'status' => 'Data Not Added'
    ]);
}
