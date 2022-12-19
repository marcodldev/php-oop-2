<?php

include_once __DIR__ . './prodotto.php';
class Cibo extends Prodotto{

    public $pesoNetto;
    public $ingredienti;

    function __construct(
        String $immagine,
        String $nome,
        Float $prezzo,
        category $category,

        String $pesoNetto,
        String $ingredienti
        ){
        $this->pesoNetto = $pesoNetto;
        $this->ingredienti = $ingredienti;
        parent::__construct($immagine,$nome,$prezzo,$category);
    }

}

?>