<?php

Class ConexionesBD {
    private static $instancia;
    private $dbh;


    /*Metodo constructor privado, para evitar que el instanciamento de nuevos objetos Patrón Singleton */
    private function __construct()
    {
        try {
 
            $this->dbh = new PDO('mysql:host=localhost;dbname=polimedic', 'root', '');
            $this->dbh->exec("SET CHARACTER SET utf8");
 
        } catch (PDOException $e) {
 
            print "Error!: " . $e->getMessage();
 
            die();
        }
    }

    public function prepare($sql)
    {
 
        return $this->dbh->prepare($sql);
 
    }

    public static function conexion()
    {
 
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
 
        }
 
        return self::$instancia;
        

    }
    /* Metodo no definido para evitar clones. Patrón Singleton */
    private function __clone() {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }


   
}
