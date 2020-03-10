<?php

class Pompe {

    public $typeCarburant;
    public $contenance;
    public $contenu;

    public function __construct(string $tc, int $cta, int $ctu)
    {
      $this->typeCarburant = $tc;
      $this->contenance = $cta;
      $this->contenu = $ctu;
    }

    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }
    public function setTypeCarburant($value): void
    {
        $this->typeCarburant = $value;
    }

    public function getContenance(): string
    {
        return $this->contenance;
    }
    public function setContenance($value): void
    {
        $this->contenance = $value;
    }

    public function getContenu(): string
    {
        return $this->contenu;
    }
    public function setContenu($value): void
    {
        $this->contenu = $value;
    }
}