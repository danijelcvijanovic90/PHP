<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <form method="GET" action="domaci_4.php" class="forma">
            <input type="text" name="cijena_proizvoda" placeholder = "Unesite cijenu proizvoda">
                <select name="vrsta_proizvoda">
                    <option value="hrana">Hrana</option>
                    <option value="oprema" >Oprema za racunare</option>
                
                </select>
                <label for="racunanje_poreza">
                    <input type="checkbox" name="porez"> Izracunaj porez
                    
                </label>
                 
            <button>Izracunaj cijenu</button>

        </form>

    </body>
</html>