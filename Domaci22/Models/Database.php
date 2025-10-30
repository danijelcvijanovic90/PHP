<?php


class Database 
{
    const HOST = "localhost";
    const ROOT = "root";
    const PASSWORD ="";
    const NAME = "web_shop";
    const PORT = 3307; // izmjenjen port na xampp

    protected $sql;

    public function database_connect()
    {
        $this -> sql = mysqli_connect(self::HOST,self::ROOT,self::PASSWORD,self::NAME,self::PORT);

        if(mysqli_connect_error())
        {
            die ("Doslo je do greske prilikom povezivanja na bazu");
        }
    }
}