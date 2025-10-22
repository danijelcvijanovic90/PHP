<?php


include_once("html/header.php");
include_once("modeli/db.php");
include_once("modeli/product_functions.php");
include_once("modeli/auth.php");





$user_input = $_GET["search"];

if(!isset($_GET['search']) || empty($_GET['search']))
{
    echo "<div class='alert alert-danger text-center'>Polje za pretragu je prazno!</div>";
    exit;
}

$products = search($user_input);




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultati pretrage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container mt-4">
    <?php if(!empty($products)): ?>
    <div class="row g-3">
     <?php foreach($products as $product): ?>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="border rounded p-3 h-100">
                <h5><?= $product['ime'] ?></h5>
                <p>Cijena: <?= $product['cijena'] ?> KM</p>
            <?php if($product['kolicina'] > 0): ?>
                <p class="text-success">Na stanju: <?= $product['kolicina'] ?></p>
            <?php else: ?>
                <p class="text-danger">Nema na stanju</p>
            <?php endif; ?>
            </div>
        </div>
            <?php endforeach; ?>
     </div>
    <?php endif; ?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>