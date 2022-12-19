<?php

include_once __DIR__ . './classi/prodotto.php';
include_once __DIR__ . './classi/accessori.php';
include_once __DIR__ . './classi/category.php';
include_once __DIR__ . './classi/cibo.php';
include_once __DIR__ . './classi/giocattoli.php';

$prodotti = [
    new accessori('./assets/71tt6pFDxZL._AC_SL1500_.jpg', 'Acquario WWE', '54€ ma solo di martedì', $category['Pesci'], 'Legno,alluminio,amianto', '10metricubici'),
];

$category = [
    'Gatto' => new category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'Cane' => new category('Cane', '<i class="fa-solid fa-dog"></i>'),
    'Uccelli' => new category('Uccelli', '<i class="fa-solid fa-dove"></i>'),
    'Pesci' => new category('Pesci', '<i class="fa-solid fa-fish"></i>')
]
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
                <?php foreach( $prodotti as $elem ){  ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo ($elem->immagine) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo ($elem->nome) ?></h5>
                        <p class="card-text"><?php echo ($elem->prezzo) ?></p>
                        <p class="card-text"><?php echo ($elem->category) ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
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