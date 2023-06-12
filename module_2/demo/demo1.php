<?php

$a = true;
$b = 12;
$c = 35.896;
$d = 'hello';

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);



$X = "PHP7";
$A = &$X;
$Y = " 7 eme version de PHP";
$Z = $Y * 10;
$X = $Y * $Y;

var_dump($X);
var_dump($A);
var_dump($Y);
var_dump($Z);
var_dump($X);

$m[20] = 'truc';
$m[30] = 'truc2';
$m[10] = 'truc3';
$m[] = 'truc4';
var_dump($m);

$k[3] = 'hello2';
$k['2coucou'] = 'hello';
$k[] = 'hello4';
var_dump($k);

$nombres = ['premier' => 12, -2 => 'coucou', 78];

$message = "Salut toi !";

var_dump($nombres);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?= $message  ?></h1>
</body>
</html>
