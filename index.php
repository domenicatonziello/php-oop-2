<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Gioco.php';

$dog = new Category('Dog', 'fa-dog');
$cat = new Category('Cat', 'fa-cat');

$crocchette = new Cibo('10', 'Crocchette per cani di taglia grande', 'Crocchette', 'https://i0.wp.com/www.bizon.it/wp-content/uploads/2020/11/crocchette-per-cani-superpremium-maiale-e-patate-kg-10.jpg', $dog, '11/02/2024', '5kg');
$snack = new Cibo('15', 'Snack croccanti per gatti', 'Snak', 'https://ss-pics.s3.eu-west-1.amazonaws.com/files/2111539/large-stuzzy-cat-snack-millemorsi-6pz-pack.jpg?1644083910', $cat, '20/06/2023', '1kg');
$fresbee = new Gioco('3', 'Fresbee per cani', 'Fresbee', 'https://images.eprice.it/nobrand/0/hres/949/204786949/2325414616PRDID.0.jpg', $dog, 'Plastica');
$tiragraffi = new Gioco('25', 'Tiragraffi per gatti', 'Tiragraffi', 'https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dwd95c2fed/images_dmail/large/509633l.jpg', $cat, 'Plastica');
$foods = [$crocchette, $snack];
$toys = [$fresbee, $tiragraffi];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP E-Commerce</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <section id="product-card">
        <h1 class="text-center py-3 bg-success">Shop Online</h1>
        <div class="container">
            <h2>Cibo</h2>
            <div class="row">
                <?php foreach ($foods as $product) : ?>
                    <div class="col-4">
                        <div class="card my-4">
                            <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->name ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->name ?></h5>
                                <p class="card-text"> <?= $product->description ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <strong> Prezzo: </strong> <?= $product->getPrice() ?></li>
                                <li class="list-group-item"> <strong> Peso: </strong> <?= $product->peso ?></li>
                            </ul>
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <p class="mb-0"><?= $product->category->name ?></p>
                                <i class="fa-solid 3x <?= $product->category->icon ?>"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <h2>Giochi</h2>
            <div class="row">
                <?php foreach ($toys as $product) : ?>
                    <div class="col-4">
                        <div class="card my-4">
                            <img src="<?= $product->image ?>" class="card-img-top" alt="<?= $product->name ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->name ?></h5>
                                <p class="card-text"> <?= $product->description ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <strong> Prezzo: </strong> <?= $product->getPrice() ?></li>
                                <li class="list-group-item"> <strong> Materiale: </strong> <?= $product->materiale ?></li>
                            </ul>
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <p class="mb-0"><?= $product->category->name ?></p>
                                <i class="fa-solid 3x <?= $product->category->icon ?>"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>

</html>