<?php

$ime = "AdmiNistraTor";
$sifra = "mojaSifraJeSigurna";
$ime = strtolower($ime); 

if ($ime == "administrator" && $sifra == "mojaSifraJeSigurna")
{
    echo "Dobrodosao administratore";
}
else 
{
    echo "Niste administrator";
}


$trenutnoVrijeme = date("H");

if ($trenutnoVrijeme >= 5 && $trenutnoVrijeme <= 12) 
{
    echo "Trenutno je jutro";
}
else if ($trenutnoVrijeme > 12 && $trenutnoVrijeme <= 20)
{
    echo "Trenutno je podne";
}
else 
{
    echo "Trenutno je noc";
}

?>