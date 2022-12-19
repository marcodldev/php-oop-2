<?php

include_once __DIR__ . './classi/prodotto.php';
include_once __DIR__ . './classi/accessori.php';
include_once __DIR__ . './classi/category.php';
include_once __DIR__ . './classi/cibo.php';
include_once __DIR__ . './classi/giocattoli.php';

$category = [
    'Gatto' => new category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'Cane' => new category('Cane', '<i class="fa-solid fa-dog"></i>'),
    'Uccelli' => new category('Uccelli', '<i class="fa-solid fa-dove"></i>'),
    'Pesci' => new category('Pesci', '<i class="fa-solid fa-fish"></i>')
];

$prodotti = [
    new accessori('./assets/71tt6pFDxZL._AC_SL1500_.jpg', 'Acquario WWE', '54€ ma solo di martedì', $category['Pesci'], 'Alluminio,Amianto,Criptonite', '20metri cubici'),
    new giocattoli('./assets/file (1).jpg', 'Franco il Sorcio', '3€ se alla commessa prende bene', $category['Gatto'], 'ottimo per fare degli scherzoni epici alla propria moglie', 'è grande più o meno così'),
    new giocattoli('./assets/file.jpg', 'Grilli multicolore', '5 Franchi cad.', $category['Gatto'], 'Cuciti a mano direttamente da mia nonna', 'molto piccoli, occhio che li perdete'),
    new Cibo('./assets/file.png', 'Trixie:Chicken filets', '5mila lire', $category['Cane'], 'mezzokg', 'Ingredienti: pollo, tonno,cioccolato, acido cloridico,bicarbonato'),
    new Cibo('./assets/file (1).png', 'Beefstick: rustico', 'molti yen', $category['Cane'], 'mezzokg', 'Ingredienti: estratto di thc,residui tossici riesumati da Chernobyl'),
    new accessori('./assets/81vnnIPLCGL._AC_SL1500_.jpg','Bird Mansion','1/6 del tuo stipendio di questo mese',$category['Uccelli'],'Titanio (per proteggere meglio i nostri volatili preferiti)','2 camere da letto,1 bagno, 1 salone, ottima per feste e famiglie allargate')
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opp2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div>
        <h1 class="text-center">Boolshop</h1>

        <div class="container">
            <div class="row">
                <h2>I nostri prodotti</h2>
                <?php foreach ($prodotti as $elem) { ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo ($elem->immagine) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo ($elem->nome) ?>
                        </h5>
                        <p class="card-text">
                            <?php echo ($elem->prezzo) ?>
                        </p>

                        <p class="card-text">
                            <?php echo ($elem->category->nome);
                    echo ($elem->category->icona); ?>
                        </p>
                        <?php if (get_class($elem) == "giocattoli") { ?>
                        <p class="card-text">
                            <?php echo ($elem->caratteristiche) ?>
                        </p>
                        <?php } ?>
                        <?php if (get_class($elem) == "accessori") { ?>
                        <p class="card-text">
                            <?php echo ($elem->materiale) ?>
                        </p>
                        <?php } ?>
                        <?php if (get_class($elem) == "giocattoli" || get_class($elem) == "accessori" ) { ?>
                        <p class="card-text">
                            <?php echo ($elem->dimensioni) ?>
                        </p>
                        <?php } ?>
                        <?php if (get_class($elem) == "Cibo") { ?>
                        <p class="card-text">
                            <?php echo ($elem->pesoNetto) ?>
                        </p>
                        <?php } ?>
                        <?php if (get_class($elem) == "Cibo") { ?>
                        <p class="card-text">
                            <?php echo ($elem->ingredienti) ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>



            </div>

        </div>

    </div>


    <script src="https://kit.fontawesome.com/c747840bf6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>