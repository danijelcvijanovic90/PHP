<?php


if(session_status() == PHP_SESSION_NONE)
{
    session_start();
    
}


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
         <a href="registracija.php">Registracija</a>

         <?php if(isset($_SESSION['ulogovan'])): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
        
        
       
    </header>






</body>
</html>