<?php

require_once 'connexion.php';
//SELECT
$id = 1;

$sql = "SELECT * FROM articles WHERE identifiant = :id";

$prep = $pdo->prepare($sql);
//j'associe la valeur au pramêtre nommé
$prep->bindValue('id', $id);

//j'éxécute la requête
$prep->execute();

//je récupère les données si c'est un select
$result = $prep->fetch(PDO::FETCH_ASSOC);

var_dump($result);

//UPDATE
$price = 12.45;
$label = "Bananes";

$sql = "UPDATE articles SET prix = :price";

$prep = $pdo->prepare($sql);
//$prep->bindValue('label', $label);
$prep->bindValue('price', $price);

$prep->execute();

echo "Il y a eu " . $prep->rowCount() . " ligne(s) impactée(s)";

//si insertion, récupération du dernier id généré.
//$pdo->lastInsertId();



