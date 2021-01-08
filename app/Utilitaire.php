<?php

namespace App;

class Utilitaire extends Vehicule
{
    protected int $kilometre;
    protected int $volume;

    public function __construct(string $name, float $prix, bool $popularite, int $kilometre, int $volume)
	{
        parent::__construct($name, $prix, $popularite);
        $this->kilometre = $kilometre;
        $this->volume = $volume;
    }
    

    public function donnerTarif($Utilitaire): int
    {
        return ($Utilitaire->prix + $Utilitaire->volume) * 10;
    }

    public function donnerDenomination($utilitaire, $marque): string
    {
        return $marque->nom ."_". $utilitaire->nom;
    }

    public function modifierPopularite($Utilitaire): void
    {      
        $volume = $Utilitaire->volume;
        if($volume > 11){
            $this->popularite = true;
        }else{
            $this->popularite = false;
        }
    }
}
