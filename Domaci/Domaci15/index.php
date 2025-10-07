<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upis proizvoda</title>
</head>
<body>
    

    <form action="modeli/kreiranje_proizvoda.php" method="POST">
        <input type="text" name="ime" placeholder = "Naziv proizvoda" required>
        <input type="text" name="opis" placeholder = "Opis proizvoda">
        <input type="number" name="cijena" placeholder = "Cijena proizvoda" required>
        <input type="text" name="slika" placeholder = "Putanja do slike" requeired>
        <input type="number" name ="kolicina" placeholder = "Kolicina" required>
        <button> DODAJ PROIZVOD</button>
    </form>

    <form action="modeli/pretraga_proizvoda.php" method="GET">
        <input type="text" name="upit" placehodel = "Pretraga" requeired>
        <button>Pretrazi</button>
    </form>


</body>
</html>