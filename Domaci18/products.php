<?php

include_once("modeli/db.php");
include_once("html/header.php");
include_once("modeli/auth.php");
include_once("modeli/product_functions.php");

start_session();


$conn = connectDB();

$product_id = $_GET["id"];

if(!isset($_GET['id']))
{
   echo "<div class='alert alert-danger text-center'>Polje id je prazno!</div>";
   exit;
}

$product = get_product_id($product_id);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvodi</title>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center mt-3">
        
            <h1><?= $product["ime"] ?></h1>
            <p>Cijena: <?= $product["cijena"] ?></p>
            <p>Opis: <?= $product["opis"] ?></p>
            <?php if($product['kolicina'] > 0): ?>
                <p>Na stanju: <?= $product["kolicina"] ?></p>
            <?php else:?>
                <p>Nema na stanju</p>
            <?php endif;?>

            <form method="POST" action="cart.php">
                <input type="number" name="quantity">
                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                <button class="btn btn-primary">Dodaj u korpu</button>
            </form>
            
            

        
    </div>
</body>
</body>
</html>