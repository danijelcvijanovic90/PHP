<?php


include_once "modeli/baza.php";



if(!isset($_GET["id"]) || empty($_GET["id"]))
{
    die("Niste upisali id proizvoda");
}



$id_proizvoda = $_GET['id'];

$rezultat = $baza -> query ("SELECT * FROM proizvodi WHERE id = $id_proizvoda");




if($rezultat -> num_rows == 0)
{
    die ("Ovaj proizvod ne postoji");
}


$proizvod = $rezultat -> fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $proizvod["ime"] ?></h1>
    <p><?= $proizvod ["opis"] ?></p>
    <p>Cijena: <?= $proizvod ["cijena"] ?></p>

          <?php if($proizvod['kolicina'] < 1): ?>
                <p>Nema na stanju</p>

            <?php else: ?>
                <p>Na stanju: <?= $proizvod["kolicina"] ?> </p>

            <?php endif; ?>
</body>
</html>