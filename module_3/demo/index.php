<?php

require_once 'Icecream.php';

$icecream = new Icecream( 'Esquimaux', "cornet");

$icecream
    ->setFlavor("Chocolat")
    ->setScoop(2);

$icecream2 = new Icecream("Glace au chocolat", "pot");

echo $icecream;
echo '<br>';
echo $icecream2;

