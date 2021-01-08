<?php

namespace App;

use DateTime;

class Voiture extends Vehicule
{
    protected int $kilometre;
    protected DateTime $annee;

    public function __construct(string $name, float $prix, bool $popularite, int $kilometre, DateTime $annee)
	{
        parent::__construct($name, $prix, $popularite);
        $this->kilometre = $kilometre;
        $this->annee = $annee;
    }

    public function calculUsure($Voiture): int
    {
        return $Voiture->kilometre * $Voiture->annee->format('Y');
    }


    public function modifierPopulariteVoiture($Voiture): void
    {   
        if($Voiture->annee->format('Y') > 2010){
            $this->popularite = true;
        }else{
            $this->popularite = false;
        }
    }

    public function donnerDenomination($voiture, $marque): string
    {
        return $marque->nom ."_". $voiture->nom;
    }

    public function donnerTarif($voiture): float
    {
        $usure = $voiture->calculUsure($voiture);
        return $voiture->prix / $usure;
    }
}
