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


<form action="modeli/registracija.php" method="POST">
    <input type="email" name="email" placeholder= "Unesite email" required>
    <input type="password" name="sifra" placeholder= "Unesite sifru" required>
    <button>Registruj se</button>
</form>

<form action="modeli/login.php" method="POST">
    <input type="email" name="email" placeholder= "Unesite email" required>
    <input type="password" name="sifra" placeholder= "Unesite sifru" required>
    <button>Prijavi se</button>
</form>


</body>
</html>