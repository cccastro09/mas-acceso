<?php
 session_start();
namespace mas_acceso\Autenticacion;
require_once "../autoload.php"

class AutenticarClass{
    public static function verUsuarioConectado($colUsu){
        if(!isset($_SESSION["token"])){
        return false;   
            exit();
        }
        return $colUsu->getByToken($_SESSION["token"]);
        
    }
    public static function esAdmin($colRol, $usua){
        $rol=$colRol->getRol($usua->getRole());
        if($rol->getNombre()!='administrador'){
            return false;
            exit(); 
        }
        return true;
    }
    public static function getSession(){
        
    }
}