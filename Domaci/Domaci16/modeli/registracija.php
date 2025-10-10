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

$password= password_hash($sifra, PASSWORD_BCRYPT);



$rezultat = $baza -> query ("SELECT * FROM korisnici WHERE email = '$email'");

if($rezultat -> num_rows > 0)
{
    die("Korisnik vec postoji");
}


$baza -> query("INSERT INTO korisnici (email, sifra) VALUES ('$email','$password')");



