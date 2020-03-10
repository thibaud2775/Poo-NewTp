<?php

require "./models/Vehicule.php";
require "./models/Voiture.php";
require "./models/Moto.php";

    $voiture = new Voiture('4','diesel','250');
   
    var_dump($voiture);

    $moto = new Moto('2','essence','300');
    var_dump($moto);