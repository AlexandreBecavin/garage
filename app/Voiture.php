<?php

namespace App;

use DateTime;

class Voiture extends Vehicule
{
    private int $kilometre;
    private int $usure = 0;
    private DateTime $annee;
    private float $tarif = 0;
    private string $denomination = '';
    private bool $popularite = false;

    public function __construct(int $kilometre, int $usure, DateTime $annee, float $tarif, string $denomination, bool $popularite)
    {
        $this->kilometre = $kilometre;
        $this->usure = $usure;
        $this->annee = $annee;
        $this->tarif = $tarif;
        $this->denomination = $denomination;
        $this->popularite = $popularite;
    }

    protected function calculUsure($kilometre, $annee): void
    {
        $this->usure = $kilometre * $annee->format('Y') 
    }

    public function donnerTarif(Vehicule $prix, $usure): void
    {
        $this->tarif = $prix / $usure;
    }

    public function donnerDenomination(Vehicule $nom, Marque $nomMarque): void
    {
        $this->denomination = $nomMarque.''.$nom;
    }

    public function modifierPopularite($annee): void
    {   
        if($annee->format('Y') > 2010){
            $this->popularite = true;
        }else{
            $this->popularite = false;
        }
    }
}
