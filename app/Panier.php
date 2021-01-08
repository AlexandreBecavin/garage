<?php

namespace App;

class Panier
{

    public function donnerFacture($vehicules, $marque): array
    {
        foreach ($vehicules as $vehicule) {
            $denomination = $vehicule->donnerDenomination($vehicule, $marque);
            $
        }
    }
}
