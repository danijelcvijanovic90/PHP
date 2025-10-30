<?php

require_once "Models/User.php";

$user = new User();

$user -> delete_user("apa@gmail.com");

//brisanje korisnika iz baze

$result = $user->update_user("danijel@gmail.com","12345678","123456789"); 

echo $result;

//update kolone sifra u bazi podataka sa novom sifrom

