<?php

$data = file_get_contents('php://input');
var_dump(json_decode($data));

$data = $_GET['response'];


if($data){
    $response = ['result' => "Bonne réponse !"];
}else{
    $response = ['result' => "Non !!!!!"];
}

echo json_encode($response);