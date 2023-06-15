<?php

//si envoie en post, put, patch, delete
$data = file_get_contents('php://input');
//transformation de la chaine de caractère en objet php
var_dump(json_decode($data));

//si envoie en GET
$data = $_GET['response'];


if($data){
    $response = ['result' => "Bonne réponse !"];
}else{
    $response = ['result' => "Non !!!!!"];
}
//transformation de l'objet php en chaine de caractère
echo json_encode($response);