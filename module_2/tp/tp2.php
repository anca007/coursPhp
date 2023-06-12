<?php
//EX1
/*Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes
et les valeurs des tableaux indicés contenant le prénom, la ville de résidence
et l’âge de la personne.*/

$p1 = ['Adam', "Jardin d'Eden", 2000];
$p2 = ['Eve', "Jardin d'Eden", 2000];

$users = ['adam' => $p1, 'eve' => $p2];

var_dump($users);

//EX2


$p3 = ['prenom' => 'Adam', 'ville' => "Jardin d'Eden", 'age' => 2000];
$p4 = ['prenom' => 'Eve', 'ville' => "Jardin d'Eden",'age' =>  2000];

$users2 = ['adam' => $p3, 'eve' => $p4];

var_dump($users2);

//EX3
//HTML + PHP
foreach ($users as $key => $user){ ?>
    <p>Element <?= $key ?></p>
    <ul>
        <?php foreach ($user as $k => $u) { ?>
            <li>Element <?= $k ?> : <?= $u; ?></li>
        <?php } ?>
    </ul>
<?php } ?>

<?php
//EX3Bis
//FULL PHP

foreach ($users as $key => $user){
   echo "<p>Element $key </p>";
   echo '<ul>';
    foreach ($user as $k => $u) {
        echo "<li>Element $k :  $u </li>";
    }
    echo '</ul>';
}

//EX4

const A_MAIL = ['machon@hotmail.fr', 'truc@eni.fr', 'bidule@hotmail.fr'];
$domain = [];
foreach (A_MAIL as $mail){

    $do = explode('@', $mail);
    $domain[$do[1]]++;
}

var_dump($domain);


