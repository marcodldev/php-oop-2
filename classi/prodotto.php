<?php 

 include_once  __DIR__ . './category.php';

 class Prodotto {
    public $immagine;
    public $nome;
    public $prezzo;
    public $category;


    function __construct(
        String $immagine,
        String $nome,
        String $prezzo,
        category $category
    ){
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->category = $category;
    }
 }


?>