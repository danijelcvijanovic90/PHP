<?php

$naslov = "Postani programer";

$navigacija = [
    [
        "link" => "home.php",
         "naziv" => "Glavna"
    ],
    [
        "link" => "about_us.php",
         "naziv" => "O nama"
    ],
    [
        "link" => "contact.php",
         "naziv" => "Kontakt"
    ]
];

$trenutna_godina = date("Y");



?>


<!DOCTYPE html>

<html lang="en">
    <head>
        
        <title><?php echo $naslov; ?></title>
    </head>
    <body>
        <h1><?php echo $naslov; ?></h1>
        <nav>
            <a href="<?php echo $navigacija[0]["link"];  ?>"> <?php echo $navigacija[0]["naziv"]; ?></a>
            <a href="<?php echo $navigacija[1]["link"];  ?>"> <?php echo $navigacija[1]["naziv"]; ?></a>
            <a href="<?php echo $navigacija[2]["link"];  ?>"> <?php echo $navigacija[2]["naziv"]; ?></a>
        </nav>
        <footer>Copyright &copy; mojsajt <?php echo $trenutna_godina; ?></footer>
    </body>
    
</html>