<?php

require_once "modeli/baza.php";


if($_SERVER["REQUEST_METHOD"] == "POST" )

    {


        if(!isset($_POST["email"]) || empty($_POST["email"]))
        {
            die("Niste unijeli email");
        }

        if(!isset($_POST["sifra"]) || empty($_POST["sifra"]))
        {
            die("Niste unijeli sifru");
        }


        $email = $_POST["email"];
        $sifra = $_POST["sifra"];

        $password= password_hash($sifra, PASSWORD_BCRYPT);



        $rezultat = $baza -> query ("SELECT * FROM korisnici WHERE email = '$email'");

        if($rezultat -> num_rows > 0)
        {
            die("Korisnik vec postoji");
        }


        $baza -> query("INSERT INTO korisnici (email, sifra) VALUES ('$email','$password')");


        header("location: index.php");


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
    <form action="registracija.php" method="POST">
    <input type="email" name="email" placeholder= "Unesite email" required>
    <input type="password" name="sifra" placeholder= "Unesite sifru" required>
    <button>Registruj se</button>
</form>

</div>
</body>
</html>
