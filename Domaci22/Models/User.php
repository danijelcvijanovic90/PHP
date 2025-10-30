<?php

require_once "Database.php";

class User extends Database
{
    public function delete_user($email)
    {
        $this->database_connect();

        $email = $this->sql->real_escape_string($email);
        $result = $this->sql->query ("SELECT * FROM korisnici WHERE email = '$email'");
        if($result -> num_rows > 0)
        {
            $this->sql->query("DELETE FROM korisnici WHERE email = '$email'");
        }
        else
        {
            die("Korisnik sa tim emailom ne postoji u bazi.");
        }


    }


    public function update_user($email,$password,$new_password)
    {
        $this->database_connect();

        $email = $this->sql->real_escape_string($email);
        $password = $this->sql->real_escape_string($password);
        $new_password = $this->sql->real_escape_string($new_password);

        

        $result = $this->sql->query("SELECT * FROM korisnici WHERE email = '$email'");
        $user = $result -> fetch_assoc();

        if($result->num_rows>0)
        {
            $password_verify = password_verify($password,$user['sifra']);
            
            if($password_verify === true)
            {
                $new_password_hash = password_hash($new_password,PASSWORD_BCRYPT);
                $this->sql->query("UPDATE korisnici SET sifra = '$new_password_hash' WHERE email = '$email'");
                
                return "Uspjesno";
            }
            else
            {
                return "Pogresna lozinka!";
            }

        }
        else
        {
            return "Korisnik ne postoji!";
        }

    }

    
}