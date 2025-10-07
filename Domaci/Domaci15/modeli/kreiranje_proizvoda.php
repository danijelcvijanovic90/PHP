<?php

require_once "baza.php";


if(!isset($_POST['ime']) || empty($_POST['ime']))
{
    die("Niste unijeli ime proizvoda");
}

if(!isset($_POST['opis']))
{
    die("Niste unijeli opis proizvoda");
}

if(!isset($_POST['cijena']) || empty($_POST['cijena']))
{
    die("Niste unijeli cijenu proizvoda");
}

if(!isset($_POST['slika']) || empty($_POST['slika']))
{
    die("Niste unijeli putanju do slike");
}
if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
{
    die("Niste unijeli kolicinu proizvoda");
}

else
{
    echo "Uspjesno ste upisali proizvod u bazu podataka";
}

$naziv_proizvoda = $_POST["ime"];
$opis_proizvoda = $_POST["opis"];
$cijena_proizvoda = $_POST["cijena"];
$slika_proizvoda = $_POST["slika"];
$kolicina= $_POST["kolicina"];

$baza -> query ("INSERT INTO proizvodi (ime,opis,cijena,slika,kolicina) VALUES ('$naziv_proizvoda','$opis_proizvoda',$cijena_proizvoda,'$slika_proizvoda',$kolicina)");

//nastaviti domaci rad