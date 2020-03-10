<?php

require "./models/Vehicule.php";
require "./models/Voiture.php";
require "./models/Moto.php";

    $voiture = new Voiture(4,'diesel',250,40,10);
   
    var_dump($voiture);
    echo '<br>';
    $moto = new Moto(2,'essence',300,20,15);
    var_dump($moto);