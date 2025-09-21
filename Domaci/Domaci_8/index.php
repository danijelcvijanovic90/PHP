<?php 

$navigacija = [[
    "link" => "index.php",
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



?>


<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Domaci zadataka predavanje 8</title>
    </head>
    <body>
        <nav>
            <?php foreach($navigacija as $segment): ?>
                <a href= "<?=  $segment["link"];?>"> <?= $segment["naziv"]; ?></a>
            <?php endforeach; ?>
        </nav>
    </body>
</html>