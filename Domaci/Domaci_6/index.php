<?php



$korisnici = ["Danijel", "Slaven", "Goran", "Stefan", "Marija"];
$korisniciMalaSlova = array_map("strtolower",$korisnici);


if (!isset($_POST["ime"])) {
    die ("Niste unijeli ime");
};


$korisniciUnos = $_POST["ime"];
$korisniciUnosMalaSlova = strtolower($korisniciUnos);




if (strlen(trim($korisniciUnos)) == 0) {
    die ("Molimo unesite ime");
};

if (in_array($korisniciUnosMalaSlova,$korisniciMalaSlova)) {
    echo "Pronasli smo korisnika $korisniciUnos";
}

else {
    echo "Nismo pronasli korisnika $korisniciUnos";
};



?>