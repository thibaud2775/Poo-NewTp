<?php

require "./models/Pompe.php";

$essence = new Pompe('essence',400,300);
var_dump($essence);
    echo '<br>';
$diesel = new Pompe('diesel',500,400);
var_dump($diesel);