<?php

$cijena = $_GET["cijena_proizvoda"];
$hrana = $_GET["vrsta_proizvoda"] == "hrana";
$oprema= $_GET["vrsta_proizvoda"] == "oprema";
$porez = isset($_GET["porez"]);

$racunica_hrana = $cijena + 50;
$racunica_oprema = $cijena + 350;


if($porez && $hrana) 
    {
    echo $racunica_hrana + ($racunica_hrana*10/100);
}

else if ($porez && $oprema) 
    {
    echo $racunica_oprema+ ($racunica_oprema*10/100);
}

else if ($hrana) 
    {
    echo $racunica_hrana;
}

else {
    echo $racunica_oprema;
};




?>