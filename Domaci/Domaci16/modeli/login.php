<?php

require_once "baza.php";

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




$rezultat = $baza -> query ("SELECT * FROM korisnici WHERE email = '$email' ");

if($rezultat -> num_rows == 1)
{
    $korisnik = $rezultat -> fetch_assoc();

    $verifikacija_sifre = password_verify($sifra,$korisnik["sifra"]);

    if($verifikacija_sifre == TRUE)
    {
        echo "Dobrodosli:  {$korisnik['email']}" ;
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