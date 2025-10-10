<?php 

include_once "baza.php";


if(!isset($_POST['pojam']) || empty($_POST['pojam']))
{
    die("Niste unijeli trazeno polje");
}

$pretraga = $_POST['pojam'];


$rezultat = $baza -> query ("SELECT * FROM proizvodi WHERE ime LIKE'%$pretraga%' OR opis LIKE'%$pretraga%'");

$proizvodi = $rezultat -> fetch_all(MYSQLI_ASSOC);

if($rezultat -> num_rows == 0)
{
    die("Nismo pronasli trazeni pojam");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($proizvodi as $proizvod): ?>

        <h1><?= $proizvod["ime"] ?></h1>
        <p><?= $proizvod["opis"] ?></p>

    <?php endforeach; ?>
</body>
</html>

