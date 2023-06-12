<?php

//EX1
$sentence = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR";
echo ucwords(strtolower($sentence));

//EX3

 $aSort = ['20Chapitre 20', '10Chapitre 10', '1Chapitre 1', '12Chapitre 12'];
 $aSort2 = ['20-Chapitre 20', '10-Chapitre 10', '1-Chapitre 1', '12-Chapitre 12'];


sort($aSort);
var_dump($aSort);

natsort($aSort2);
var_dump($aSort2);

//EX4
$birthday = new DateTime("2000-05-1");
$date = new DateTime();

echo $date->getTimestamp() - $birthday->getTimestamp();

//EX5
setlocale(LC_ALL, 'fr_FR');
$date = new DateTime('2017-12-25');
var_dump($date);
echo $date->format('l');


