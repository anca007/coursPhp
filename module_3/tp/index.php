<?php

require_once 'Ville.php';
require_once 'VilleAvecConstructeur.php';
require_once 'VilleAvecRegion.php';

//EX1
$rennes = new Ville();
$rennes->setNom('Rennes');
$rennes->setDep('Ille et vilaine');

echo $rennes;

echo '<br>';
//EX2
$brest = new VilleAvecConstructeur('Toulouse', 'Finistère');
echo $brest;

//EX3
echo '<br>';
$nantes = new VilleAvecRegion("Nantes", 'Loire-Atlantique', "Pays de la loire");
echo $nantes;

//EX4
$quimper = new VilleAvecConstructeur('Quimper', 'Finistère');
echo '<br>';
echo VilleAvecConstructeur::getNomLePlusLong();

//EX5
require_once 'Form.php';

$loginForm = new Form("login.php", 'POST');
$loginForm->addInput('login', 'Identifiant', 'text');
$loginForm->addInput('password', 'Mot de passe', 'password');
$loginForm->addInput('mail', 'Email', 'email');
$loginForm->addSubmit("Se connecter");

echo $loginForm->getForm();
