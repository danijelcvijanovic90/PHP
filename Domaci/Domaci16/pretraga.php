<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <header>
            
            <a href="index.php">Pocetna</a>
            <a href="proizvodi.php">Proizvodi</a>
            <a href="pretraga.php">Pretrazi proizvode</a>
        </header>
    

        <form action="modeli/pretraga_proizvoda.php" method="POST">
            <input type="text" name="pojam" placeholder= "Upisite pojam za pretragu">
            <button>Pretrazi</button>
        </form>



</body>
</html>