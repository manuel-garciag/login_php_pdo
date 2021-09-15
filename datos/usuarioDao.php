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
        $resultado->bindParam(":usuario", $usuario->getUsuario());
        $resultado->bindParam(":password", $usuario->getPassword());
        $resultado->execute();

        if (count($resultado)) {
            return true;
        }

        return false;
    }
}
