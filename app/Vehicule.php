<?php
namespace App;


abstract class Vehicule
{
    public string $nom;
    protected float $prix;
    public bool $popularite;

    public function __construct(string $nom, float $prix, bool $popularite)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->popularite = $popularite;
    }
}
