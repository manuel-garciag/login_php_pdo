<?php

include 'conexion.php';
include '../entidades/usuario.php';

class UsuarioDao extends Conexion
{

    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Metodo que sirve para validar el login
     * 
     * @param object $usuario
     * @return boolean 
     */
    public static function login($usuario)
    {
        $query = "SELECT u.id, u.nombre, u.usuario, u.email, u.privilegio, u.fecha_registro FROM usuarios u WHERE u.usuario = :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        // Forma 1 para enviar los datos
        // $user = $usuario->getUsuario();
        // $pass = $usuario->getPassword();
        // $resultado->bindParam(":usuario", $user);
        // $resultado->bindParam(":password", $pass);

        // Forma 2 para enviar los datos
        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());
        $resultado->execute();

        // die(var_dump($resultado->fetchAll(PDO::FETCH_ASSOC)));

        if ($resultado->rowCount() > 0) {
            return true;
        }

        return false;
    }
}
