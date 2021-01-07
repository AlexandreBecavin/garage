<?php
namespace App;


abstract class Vehicule
{
    public string $nom;
    protected float $prix;
    public bool $popularite;
    protected float $tarif = 0;
    protected string $denomination = "";

    public function __construct(string $nom, float $prix, bool $popularite, float $tarif, string $denomination)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->popularite = $popularite;
        $this->tarif = $tarif;
        $this->denomination = $denomination;
    }
}
