<?php

class Mba3


{

    private $dsn = "4D:host=100.48.0.10";
    private $usr = "ODBC";
    private $pass = "ODBC";
    //private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openMba3()
    {
        try{
            $this->con = new PDO($this->dsn,$this->usr,$this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //return $this->con;
            echo "Conexión Exitosa";

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }

    }

    public function closeMba3() {
    $this->con = null;
    }
}