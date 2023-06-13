<?php

var_dump($_REQUEST);

if(isset($_REQUEST['submit'])){

    //$login = htmlspecialchars($_REQUEST['login']);
    $login = filter_var($_REQUEST['login'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_REQUEST['password'], FILTER_SANITIZE_STRING);


    var_dump($login);
    var_dump($password);

}else{
    echo 'Utilisateur non connecté !';
}

