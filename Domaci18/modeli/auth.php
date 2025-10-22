<?php


include_once("db.php");



function user_registration($email, $password, $password_verify)
{
    $conn = connectDB();
    $hashed_password = password_hash($password,PASSWORD_BCRYPT);
    $result = $conn -> query ("SELECT * FROM korisnici WHERE email = '$email'");


    if($result -> num_rows > 0)
    {
        die("<div class='alert alert-danger text-center'>Korisnik je vec registrovan sa vasom email adresom!</div>");
    }

    else
    {   if($password == $password_verify)
        {
            $insert = $conn -> query ("INSERT INTO korisnici  (email,sifra) VALUES ('$email', '$hashed_password')");
        }
        else 
        {
            die("<div class='alert alert-danger text-center'>Sifre se ne poklapaju!</div>");
        }
        
    }

    return $insert;

}


function login ($email, $password)
{
    $conn = connectDB();
    $result = $conn -> query ("SELECT * FROM korisnici WHERE email = '$email'");

    if($result -> num_rows > 0)
    {
        $user = $result -> fetch_assoc();
        $password_verified = password_verify($password, $user['sifra']);
        
        if($password_verified == true)
        {
            if(session_status() == PHP_SESSION_NONE)
            {
            session_start();
            }

            $_SESSION['loged'] = true;
            $_SESSION['user_id'] = $user['id'];

            return true;
        }

        else
        {
            return "<div class='alert alert-danger text-center'>Sifra nije tacna!</div>";
        }

    }

    else
    {
        return "<div class='alert alert-danger text-center'>Email ne postoji!</div>";
    }

    
}




function start_session()
{
    if(session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
    return true;
}









?>