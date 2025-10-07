<?php

require_once "baza.php";

if(!isset($_GET["upit"]) || empty($_GET["upit"]))
{
    die("Niste upisali pojam za pretragu");
}

$upit = strtolower($_GET["upit"]);

$rezultat = $baza -> query ("SELECT * FROM proizvodi WHERE LOWER(ime) LIKE '%$upit%' OR LOWER(opis) LIKE '%$upit%'");
$svi_proizvodi = $baza -> query("SELECT * FROM proizvodi");
$proizvodi = $svi_proizvodi -> fetch_all(MYSQLI_ASSOC);

if($rezultat -> num_rows > 0)
{
    $pretraga = $rezultat -> fetch_all(MYSQLI_ASSOC);
    echo "Broj pronadjenih proizvoda: " .$rezultat->num_rows. "<br>";

    foreach ($pretraga as $artikal)
    {
        echo "Pronadjeni proizvodi: " .$artikal['ime']. "-" .$artikal['opis']. "<br>";
    }
    //foreach($proizvodi as $proizvod)
   // {
       // echo "Lista dostupnih proizvoda:" .$proizvod['ime']. "-" .$proizvod['opis']. "<br>";
    //}
}

else
{
    echo "Nismo pronasli proizvod koji ste trazili<br>";

    //foreach($proizvodi as $proizvod)
    //{
        //echo "Lista dostupnih proizvoda:" .$proizvod['ime']. "-" .$proizvod['opis']. "<br>";
    //}
    
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    <table>
    <caption>Lista dostupnih proizvoda</caption>
    <tr>
        <th>Naziv</th>
        <th>Opis</th>
        <th>Cijena</th>
    </tr>

    <?php if(count($proizvodi) > 0): ?>
        <?php foreach($proizvodi as $proizvod): ?>
            <tr>
                
                <td><?= $proizvod["ime"] ?></td>
                <td><?= $proizvod["opis"] ?></td>
                <td><?= $proizvod["cijena"] ?></td>
            </tr>
        <?php endforeach; ?>

    <?php endif; ?>

</table>


</body>
<!-- DIO HTML JE URADJEN UZ POMOC CHAT GPT, NISAM USPIO KREIRATI I VRATITI TABELU SAMOSTALNO -->
</html>




