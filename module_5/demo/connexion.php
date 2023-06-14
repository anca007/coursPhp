<?php
try {
    //driver : server : bdd
    $dsn = 'mysql:host=localhost:3306;dbname=fruit';

    //chaine de connexion pdo, dsn, user, password, options
    $pdo = new PDO($dsn, 'sly', 'toto');

    //permet de remonter les erreurs comme des exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Connexion réussie !';
} catch (PDOException $e) {
    echo 'Erreur de connexion ' . $e->getMessage();
}