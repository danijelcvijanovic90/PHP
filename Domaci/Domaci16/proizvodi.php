<?php

require_once "modeli/baza.php";

$rezultat = $baza -> query ("SELECT * FROM proizvodi");
$proizvodi = $rezultat -> fetch_all(MYSQLI_ASSOC);






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB SHOP</title>
</head>
<body>
    
    <header>
        
        <a href="index.php">Pocetna</a>
        <a href="proizvodi.php">Proizvodi</a>
        <a href="pretraga.php">Pretrazi proizvode</a>
    </header>

    <?php foreach($proizvodi as $proizvod):  ?>

        <div>
            <h1><?= $proizvod['ime'] ?></h1>
            <h5><?= $proizvod['opis'] ?></h5>
            <p>Cijena: <?= $proizvod['cijena'] ?></p>
            
            

            <?php if($proizvod['kolicina'] < 1): ?>
                <p>Nema na stanju</p>

            <?php else: ?>
                <p>Na stanju: <?= $proizvod["kolicina"] ?> </p>

            <?php endif; ?>

            <a href="proizvod.php?id=<?= $proizvod['id'] ?>">Pogledaj proizvod</a>

        </div>
          <?php endforeach; ?>

          

</body>
</html>