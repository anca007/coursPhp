<?php

require_once 'connexion.php';


$sql = "SELECT * FROM articles";

/**
 * @var PDO $pdo
 */
$result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$result2 = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

var_dump($result);
var_dump($result2);
