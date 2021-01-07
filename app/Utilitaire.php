<?php

namespace App;

class Utilitaire extends Vehicule
{
    private int $kilometre;
    private int $volume;
    private float $tarif = 0;
    private string $denomination = '';
    private bool $popularite = false;

    public function donnerTarif(Vehicule $prix, $volume): void
    {
        $this->tarif = ($prix + $volume) * 10;
    }

    public function donnerDenomination(Vehicule $nom, Marque $nomMarque): void
    {
        $this->denomination = $nomMarque.''.$nom;
    }

    public function modifierPopularite($volume): void
    {   
        if($volume > 11){
            $this->popularite = true;
        }else{
            $this->popularite = false;
        }
    }
}
