<?php

require_once "baza.php";





if(!isset($_POST["email"]) || empty($_POST["email"]))
{
    die ("Niste unijeli trazena polja");
}

if(!isset($_POST["password"]) || empty($_POST["password"]))
{
    die ("Niste unijeli trazena polja");
}

$email = $_POST["email"];
$password = $_POST["password"];


$baza -> query ("INSERT INTO korisnici (email, sifra) VALUES ('$email','$password')");
