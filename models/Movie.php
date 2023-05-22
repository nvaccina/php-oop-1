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
}

$FastAndFurios = new Movie('Fast And Furios ', 'Rob Cohen', 106);


var_dump($FastAndFurios);
