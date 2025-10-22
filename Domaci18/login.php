<?php


include_once("modeli/auth.php");
include_once("html/header.php");


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(!isset($_POST["email"]) || empty($_POST["email"]))
    {
        die ("<div class='alert alert-danger text-center'>Polje email mora biti popunjeno!</div>");
    }

      if(!isset($_POST["password"]) || empty($_POST["password"]))
    {
        die ("<div class='alert alert-danger text-center'>Polje sifra mora biti popunjeno!</div>");
    }

    

    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    

    $rezultat = login($email, $password);


    if ($rezultat === true) 
    {
        echo "<div class='alert alert-success text-center'>Prijava uspjesna!</div>";
        header("location: index.php");
    } else {
        echo "<div class='alert alert-danger text-center'>Došlo je do greške prilikom prijave!</div>";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="POST" class="container d-flex flex-column justify-content-center items-align-center mt-5 col-4">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email adresa</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nikada ne dijelimo email adresu sa trecim stranama</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Sifra</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary">Prijavite se</button>
  <a href="registration.php" class="d-flex justify-content-center mt-3">Nemate nalog? Registrujte se!</a>
</form>


</body>
</html>