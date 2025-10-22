<?php

include_once("html/header.php");
include_once("modeli/auth.php");
include_once("modeli/db.php");
include_once("modeli/product_functions.php");

start_session();
$conn = connectDB();



$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];

$get_price = get_product_id($product_id);
$price = $get_price['cijena'];

$total_price = $quantity * $price;



if(!isset($_SESSION['user_id']))
{
    echo "<div class='alert alert-danger text-center'>Morate biti ulogovani kako bi dodali u korpu!
    <a href='login.php' class='btn btn-primary'>Ulogujte se!</a></div>";
    exit;
}

$user_id = $_SESSION['user_id'];





 if(!isset($_POST["product_id"]) || empty($_POST["product_id"]))
    {
        die ("<div class='alert alert-danger text-center'>Polje mora biti popunjeno!</div>");
    }

      if(!isset($_POST["quantity"]) || empty($_POST["quantity"]))
    {
        die ("<div class='alert alert-danger text-center'>Polje mora biti popunjeno!</div>");
    }

   




$result = $conn -> query ("SELECT * FROM proizvodi WHERE id = $product_id");
$products = $result -> fetch_assoc();

if($products['kolicina'] < $quantity)
{
    echo ("<div class='alert alert-danger text-center'>Nema dovoljno na stanju!
    <a href='index.php' class='btn btn-primary'>Nazad na proizvode</a></div>");
    exit;
}
else
{
    add_to_cart($product_id,$user_id,$total_price,$quantity);
    echo ("<div class='alert alert-danger text-center'>Dodano u korpu!
    <a href='index.php' class='btn btn-primary'>Nazad na proizvode</a></div>");

}



?>



