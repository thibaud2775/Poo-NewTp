<?php

class Vehicule
{
    public $roues;
    public $carburant;
    public $vitesse;
    public $contenanceReservoir;
    public $contenuReservoir;

    public function __construct(int $r, string $c, int $v, int $cr, int $ur)
    {
      $this->roues = $r;
      $this->carburant = $c;
      $this->vitesse = $v;
      $this->contenanceReservoir = $cr;
      $this->contenuReservoir = $ur;

    }

    public function getNbRoues(): int
    {
        return $this->roues;
    }
    public function setNbRoues($value): void
    {
        $this->roues = $value;
    }
    public function getTypeCarburant(): string
    {
        return $this->carburant;
    }
    public function setTypeCarburant($value): void
    {
        $this->carburant = $value;
    }
    public function getVitesseMax(): int
    {
        return $this->vitesse;
    }
    public function setVitesseMax($value): void
    {
        $this->vitesse = $value;
    }

    public function fairePlein(Pompe $pompe){
 

    }
}