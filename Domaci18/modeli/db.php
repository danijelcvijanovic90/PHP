<?php

function connectDB()
{
    $conn = mysqli_connect("localhost","root","","web_shop");
    if(!isset($conn))
    {
        die("Greska pri konekciji.");
    }
    return $conn;
}



?>