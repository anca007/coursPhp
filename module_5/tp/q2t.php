<?php

if (isset($_REQUEST['btnSubmit'])) {

    require_once 'connexion.php';

    $id = htmlspecialchars($_REQUEST['id']);
    $mark = htmlspecialchars($_REQUEST['mark']);
    $model = htmlspecialchars($_REQUEST['model']);
    $fuel = htmlspecialchars($_REQUEST['fuel']);


    $sql = 'INSERT INTO modeles (id_modele, marque, modele, carburant) VALUES (:id, :mark, :model, :fuel)';

    $prep = $pdo->prepare($sql);
    $prep->bindValue('id', $id);
    $prep->bindValue('mark', $mark);
    $prep->bindValue('model', $model);
    $prep->bindValue('fuel', $fuel);

    $prep->execute();

    header('location: q1.php');

}else{
    header('location: q2.php');
}
