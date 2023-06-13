<?php

var_dump($_REQUEST);

if(isset($_REQUEST['submit'])){
    echo "Le login est " . $_REQUEST['login'];
}else{
    echo 'Utilisateur non connecté !';
}

