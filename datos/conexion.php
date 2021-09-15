<?php

class Conexion
{

    /**
     * Conexion a la base de datos
     * 
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $cn = new PDO("mysql:host=localhost;dbname=login_php", "root", "");
            return $cn;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}
