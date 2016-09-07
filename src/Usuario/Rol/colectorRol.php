<?php
namespace mas_acceso\usuario\Rol;

//require_once "RolClass.php";
//require_once "../../../autoload.php";
use mas_acceso\util\Collector;

class ColectorRol extends Collector
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addRol($rol)
    {
        return self::execQuery("INSERT INTO rol(r_constante, r_nombre) VALUES('".$rol->getConstante()."','".$rol->getNombre()."')");
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
    public function leerRol()
    {

        return self::read('rol', 'RolClass');
    }
    public function updateDemo($rolo)
    {
        try {
             self::execQuery("UPDATE rol SET id='".$rol->getId()."',nombre='".$rol->getNombre()."',r_constante='".$rol->getConstante()."' WHERE id=".$rol->getId());

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function deleteRol($rol)
    {
        try {
             self::execQuery("DELETE FROM rol WHERE id=".$rol);

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
