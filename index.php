<?php
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Cibo.php';


$categoriaCani = new Categoria(
    'Cani',
    'icona'
);
$categoriaGatti = new Categoria(
    'Gatti',
    'icona'
);

$prodotti = [];
$prodotti[] = new Prodotto(
    'Prodotto 1',
    'Descrizione prodotto 1',
    9.99,
    'img',
    5,
    $categoriaCani
);

$prodotti[] = new Prodotto(
    'Prodotto 2',
    'Descrizione prodotto 2',
    9.99,
    'img',
    5,
    $categoriaGatti
);

$prodotti[] = new Cibo(
    'Cibo 1',
    'Descrizione prodotto 2',
    9.99,
    'img',
    5,
    $categoriaGatti,
    '07/03/2023'
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title> PHP OOP 2 </title>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php
                    foreach ($prodotti as $index => $prodotto) {
                ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $prodotto->immagine ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome; ?></h5>
                            <h6>
                                <?php echo $prodotto->categoria->nome; ?>
                                <?php echo $prodotto->categoria->icona; ?>

                            </h6>
                            <p class="card-text"><?php echo $prodotto->descrizione; ?></p>
                            <a href="#" class="btn btn-primary"> Vedi prodotto </a>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>