<?php

class Movie{
  public $titolo;
  public $regista;
  public $durata;

  function __construct($_titolo, $_regista, $_durata){
    $this->titolo = $_titolo;
    $this->regista = $_regista;
    $this->durata = $_durata;
  }

  public function getFullInfo(){
    return 'Titolo: ' . $this->titolo . ' - Registra: ' . $this->regista . ' - Durata: ' . $this->durata . ' minuti'; 

  }
}

$FastAndFurios = new Movie('Fast And Furios', 'Rob Cohen', 106);
$FastAndFuriosX = new Movie('Fast & Furios X', 'Louis Leterrier', 141);

var_dump($FastAndFurios->getFullInfo());
var_dump($FastAndFurios->getFullInfo());
