<?php

include_once __DIR__ . './prodotto.php';

class accessori extends Prodotto{

    public $materiale;
    public $dimensioni;

    function __construct(
        String $immagine,
        String $nome,
        String $prezzo,
        category $category,

        String $materiale,
        String $dimensioni
        ){
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($immagine,$nome,$prezzo,$category);
    }

}

?>