<?php

include_once __DIR__ . './prodotto.php';

class giocattoli extends Prodotto{

    public $caratteristiche;
    public $dimensioni;

    public function __construct(
        String $immagine,
        String $nome,
        String $prezzo,
        category $category,

        String $caratteristiche,
        String $dimensioni
        ){
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        parent::__construct($immagine,$nome,$prezzo,$category);
    }

}


?>