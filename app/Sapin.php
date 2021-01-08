<?php

namespace App;

class Sapin
{
    public string $nom;
    protected float $prix = 5;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function donnerNom($sapin): string
    {
        return $sapin->nom;
    }

    public function donnerPrix($sapin): float
    {
        return $sapin->prix;
    }

}
