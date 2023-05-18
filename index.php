<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
 - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
 Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

 <?php

 require __DIR__ . "/db.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <?php foreach ($products as $key => $product) { ?>
                <div class="col-4">
                    <div class="card">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name; ?></h5>
                            <i class="<?php echo $product->category->icon; ?>"></i>
                            <p>Category: <?php echo $product->category->animal ?></p>
                            <p>€ <?php echo $product->price ?></p>
                            <p><?php echo $product->getDetails(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    





</body>
</html>