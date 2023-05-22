<?php

include __DIR__ . "/Generi.php";

class Movie{
  public $titolo;
  public $regista;
  public $genere;
  public $durata;
  public $image;

  function __construct($_titolo, $_regista, Genere $_genere = null, $_durata, $_image){
    $this->titolo = $_titolo;
    $this->regista = $_regista;
    $this->genere = $_genere;
    $this->durata = $_durata;
    $this->image = $_image;
  }

  public function getInfo(){
    return 'Registra: ' . $this->regista . '<br>Durata: ' . $this->durata . ' minuti'; 
  }

  public function getGeneri(){
    return 'Genere: ' . $this->genere->genere1 . '/' . $this->genere->genere2;
  }
}

