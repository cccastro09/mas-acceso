<?php
namespace mas_acceso\Autenticacion;

class AutenticarClass
{
    public static function verUsuarioConectado($colUsu, $session)
    {
        if (!isset($session["token"])) {
            return false;
        }
        return $colUsu->getByToken($session["token"]);
    }
    public static function esAdmin($colRol, $usua)
    {
        $rol=$colRol->getRol($usua->getRole());
        return $rol->getNombre() == 'administrador';
    }
    public static function getSession()
    {
    }
}
