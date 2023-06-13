<?php

class VilleAvecConstructeur
{
    //private static VilleAvecConstructeur $ville;
    private static string $nomLePlusLong = "";

    public function __construct(private string $nom, private string $dep)
    {
//        if (!isset(self::$ville) || strlen($this->nom) > strlen(self::$ville->nom)) {
//            self::$ville = $this;
//        }

        if(strlen($nom) > self::$nomLePlusLong){
            self::$nomLePlusLong = $nom;
        }
    }

    public static function getNomLePlusLong()
    {
        //return self::$ville->nom;
        return self::$nomLePlusLong;
    }

    public function __toString(): string
    {
        return "La ville $this->nom est dans le département $this->dep";
    }
}