<?php
namespace mas_acceso\usuario\Permiso;

//require_once "RolClass.php";
//require_once "../../../autoload.php";
use mas_acceso\util\Collector;

class ColectorPermiso extends Collector
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addPermiso($per)
    {
        return self::execQuery("INSERT INTO permiso(p_constante, p_descripcion) VALUES('".$per->getConstante()."','".$per->getDescripcion()."')");
    }

  /* public function getNombre($id)
   {

    $stmt = $this->con->prepare("SELECT * FROM demo WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $usuario=$stmt->fetchObject("Demo");
    return $usuario;
   }
   public function readAlldemo(){

      return self::read('demo','demo');


  }*/
    public function leerPermiso()
    {

        return self::read('permiso', PermisoClass::class);
    }
    public function updatePermiso($per)
    {
        try {
             self::execQuery("UPDATE permiso SET p_id='".$per->getId()."',p_descripcion='".$per->getDescripcion()."',p_constante='".$per->getConstante()."' WHERE p_id=".$per->getId());

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getPermiso($id){
         return self::getBYId($id, 'permiso', 'p_id', PermisoClass::class);
    }

    public function deletePermiso($per)
    {
        try {
             self::execQuery("DELETE FROM permiso WHERE p_id=".$per);

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
