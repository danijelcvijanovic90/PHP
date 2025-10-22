<?php

include_once("modeli/db.php");
include_once("modeli/auth.php");

function get_all_products()
{
    $conn = connectDB();
    $result = $conn -> query ("SELECT * FROM proizvodi");
    return $result -> fetch_all(MYSQLI_ASSOC);

}

function get_product_id($product_id)
{
    start_session();
    $conn = connectDB();

    $result = $conn -> query ("SELECT * FROM proizvodi WHERE id = $product_id");

    if($result -> num_rows > 0)
    {
        return $result -> fetch_assoc();
    }
    else
    {
        return null;
    }

}



function add_to_cart ($product_id, $user_id, $price, $quantity)
{
    start_session();
    $conn = connectDB();

    $insert_into_orders = $conn -> query ("INSERT INTO narudzbine (id_proizvoda, id_korisnika, cijena, kolicina) VALUES ($product_id,$user_id,$price,$quantity)");

    $update_quantity = $conn -> query("UPDATE proizvodi SET kolicina = kolicina - $quantity WHERE id = $product_id AND kolicina > 0");

    return $insert_into_orders && $update_quantity;
}



function view_cart($user_id)
{
    start_session();
    $conn = connectDB();

    $result = $conn -> query ("SELECT n.kolicina, n.cijena,p.ime FROM narudzbine as n
    JOIN proizvodi as p
    ON p.id = n.id_proizvoda
    WHERE id_korisnika = $user_id");

    $products = $result -> fetch_all(MYSQLI_ASSOC);

    return $products;
}

function search($user_input)
{
    start_session();
    $conn = connectDB();


    $result = $conn -> query ("SELECT * FROM proizvodi WHERE ime LIKE '%$user_input%' OR opis LIKE '%$user_input%'");
    $products = $result -> fetch_all(MYSQLI_ASSOC);
    
    if($result -> num_rows == 0)

    {
        echo "<div class='alert alert-danger text-center'>Nisu pronadjeni rezultati!
    <a href='index.php' class='btn btn-primary'>Nazad na pretragu!</a></div>";
    exit;
    }
    else
    {
        return $products;
    }
}









?>