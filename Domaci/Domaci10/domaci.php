<?php



$dostava = [
    "Subotica" => 220,
    "Pancevo" => 10,
    "Sarajevo" => 292,
    "Split" => 799
];




function izracunaj_dostavu ($cijena,$grad)
{
    $cijena_dostave =0;

    $dostava = [
    "Subotica" => 220,
    "Pancevo" => 10,
    "Sarajevo" => 292,
    "Split" => 799
];

    $grad_postoji = array_key_exists($grad, $dostava);
    
    if($grad_postoji)
    {
        $rastojanje = $dostava[$grad];
        
        if($rastojanje <= 100)
        {
            $cijena_dostave = 200;
        }
        elseif($rastojanje > 100 && $rastojanje <=200)
        {
            $cijena_dostave = 350;
        }
        else
        {
            $cijena_dostave = 500;
        }
       
    }
    else
    {
        $cijena_dostave = null;
    }

    return $cijena_dostave;
    
}

$beograd = izracunaj_dostavu(5000,"Beograd");
$subotica = izracunaj_dostavu(2000,"Subotica");
izracunaj_dostavu(2000,"Sarajevo");
echo $subotica;
echo $beograd;



//nisam samostalno uspio da rijesim ovaj zadatak. Saljem zadatak sa predavanja.

