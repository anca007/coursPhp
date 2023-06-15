<?php

require_once 'connexion.php';

$sql = "SELECT * FROM modeles ORDER BY marque";
$results = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
