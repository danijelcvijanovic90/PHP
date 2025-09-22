<?php



function izracunaj_pdv ($cijena) 
{

    

    if (!is_int($cijena) && !is_float($cijena)) 
        {
            echo "Molim proslijedite broj<br>";
        }

    else 
        {
            $rezultat = $cijena * 22 / 100;
            echo "Ukupan PDV je $rezultat<br>";
        }

   
}


izracunaj_pdv(250);
izracunaj_pdv("Danijel");
izracunaj_pdv(1300);
izracunaj_pdv(1800);
izracunaj_pdv("123");




?>