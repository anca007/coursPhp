<?php

require_once 'Ville.php';

class VilleAvecRegion extends Ville
{
    public function __construct(string $nom, string $dep, private string $region)
    {
        //parent::__construct($nom, $dep); si constructeur dans la class parent
        $this->setNom($nom);
        $this->setDep($dep);
    }

    public function __toString(): string
    {
        return parent::__toString() . " de la région $this->region";
    }
}