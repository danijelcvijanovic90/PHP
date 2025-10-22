<?php 


include_once("html/header.php");
include_once("modeli/auth.php");
include_once("modeli/product_functions.php");



start_session();

if(!isset($_SESSION['user_id']))
{
    echo "<div class='alert alert-danger text-center'>Morate biti ulogovani kako bi vidjeli korpu!
    <a href='login.php' class='btn btn-primary'> Ulogujte se <a/></div>";
    exit;
}


$user_id = $_SESSION['user_id'];

$products = view_cart($user_id);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korpa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row g-3">
            <?php foreach($products as $product): ?>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="border rounded p-3 h-100">
                        <h5><?= $product['ime'] ?></h5>
                        <p>Količina: <?= $product['kolicina'] ?></p>
                        <p>Cijena po komadu: <?= $product['cijena'] ?> KM</p>
                        <p>Ukupno: <?= $product['cijena'] * $product['kolicina'] ?> KM</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


