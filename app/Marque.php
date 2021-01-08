<?php

namespace App;

class Marque
{
    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

}
