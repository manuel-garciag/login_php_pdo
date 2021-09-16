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
        $query = "SELECT u.* FROM usuarios u WHERE u.usuario = :usuario AND password = :password";

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

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas['usuario'] == $usuario->getUsuario() && $filas['password'] == $usuario->getPassword()) {
                return true;
            }
        }

        return false;
    }
}
