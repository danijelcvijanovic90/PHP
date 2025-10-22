<?php

include_once("modeli/db.php");
include_once("html/header.php");
include_once("modeli/product_functions.php");

$conn = connectDB();
if (!$conn) {
    die("Greška pri konekciji: " . $conn->connect_error);
}



$products = get_all_products();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvodi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
    <form method="GET" action="search.php" class="d-flex mb-3">
        <input type="text" name="search" class="form-control me-2" placeholder="Pretraži proizvode po imenu ili opisu">
        <button type="submit" class="btn btn-primary">Pretraži</button>
    </form>
    </div>
    <div class="container mt-4">
        <div class="row g-3">
            <?php foreach($products as $product): ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="border rounded p-3 h-100">
                        <h5><?= $product["ime"] ?></h5>
                        <p>Cijena: <?= $product["cijena"] ?> KM</p>

                        <?php if($product['kolicina'] > 0): ?>
                            <p class="text-success">Na stanju: <?= $product["kolicina"] ?></p>
                        <?php else: ?>
                            <p class="text-danger">Nema na stanju</p>
                        <?php endif; ?>

                        <a href="products.php?id=<?= $product['id'] ?>" class="btn btn-primary mt-2">Pogledaj proizvod</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>