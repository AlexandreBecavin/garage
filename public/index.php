<?php

namespace App;

use DateTime;

require __DIR__.'/../vendor/autoload.php';

$marque = new Marque('mercedes');

//---------- test camion ----------//
//popularite
$camion = new Utilitaire('vito', 120, true, 120000, 9);
dump($camion);
$camion->modifierPopularite($camion);
dump($camion);
$camion = new Utilitaire('vito', 25000, true, 120000, 12);
$camion->modifierPopularite($camion);
dump($camion);

//tarif
$tarif = $camion->donnerTarif($camion);
dump($tarif);

//denomination
$denomination = $camion->donnerDenomination($camion, $marque);
dump($denomination);

//---------- test voiture ----------//
//popularite
$voiture = new Voiture('classeA', 12000, true, 100000, new DateTime('1998-05-02'));
dump($voiture);
$voiture->modifierPopulariteVoiture($voiture);
dump($voiture);
$voiture = new Voiture('classeA', 12000, true, 100000, new DateTime('2015-05-02'));
$voiture->modifierPopulariteVoiture($voiture);
dump($voiture);

//usure
$usure = $voiture->calculUsure($voiture);
dump($usure);

//denomination
$denomination = $voiture->donnerDenomination($voiture, $marque);
dump($denomination);

// tarif
$tarif = $voiture->donnerTarif($voiture);
dump($tarif);


//----------- test sapin (désodorisant) -----------//
$sapin = new Sapin('jaipasdenom');
dump($sapin);

// donner nom
$nom = $sapin->donnerNom($sapin);
dump($nom);

//donner prix
$prix = $sapin->donnerPrix($sapin);
dump($prix);