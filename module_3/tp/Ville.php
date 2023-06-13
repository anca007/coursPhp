<?php


class Ville
{
    private string $nom;
    private string $dep;

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function setDep(string $dep){
        $this->dep = $dep;
    }

    public function __toString(): string
    {
       return "La ville $this->nom est dans le département $this->dep";
    }

}