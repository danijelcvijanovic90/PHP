

<?php

require_once "modeli/baza.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // obradi formu
    if (empty($_POST["email"])) 
        
    { die("Niste unijeli email"); }


    $email = $_POST["email"];
    $sifra = $_POST["sifra"];

    $rezultat = $baza -> query ("SELECT * FROM korisnici WHERE email = '$email' ");

if($rezultat -> num_rows == 1)
{
    $korisnik = $rezultat -> fetch_assoc();

    $verifikacija_sifre = password_verify($sifra,$korisnik["sifra"]);

    if($verifikacija_sifre == TRUE)
    {
        if(session_status() == PHP_SESSION_NONE)
        {
        session_start();
        

        $_SESSION['ulogovan'] = TRUE;
        $_SESSION['user_id'] = $korisnik['id'];
        
        header("location: index.php"); ;
    
        } 


    }

    else
    {
        echo "Neispravna sifra";
    }
}

else 
{
    echo "Ne postoji korisnik sa emailom: $email";
}

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
    <div>
    <form action="login.php" method="POST">
    <input type="email" name="email" placeholder= "Unesite email" required>
    <input type="password" name="sifra" placeholder= "Unesite sifru" required>
    <button>Prijavi se</button>
</form>
</div>
</body>
</html>

