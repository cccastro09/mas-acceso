<?php

namespace mas_acceso\edificio\categoria;
  use mas_acceso\util\Collector;
  use mas_acceso\edificio\categoria\CategoriaClass;
  class CollectorCategoria extends Collector {

/**
     * Instancia un Colector de categoria
     *
     *
     */
   function __construct()
   {
    parent::__construct();
   }

      /**
     * Añade una nueva categoria a la base de datos
     *
     */
   public function addCategoria($categoria)
   {
     return self::execQuery("INSERT INTO categoria(c_nombre, c_descripcion) VALUES (".$categoria->getNombre().",".$categoria->getDescripcion().")");
   }

      /**
     * Retorna una categoria de la base de datos segun su Id
     *
     * @return String con la informacion del registro voto segun su ID.
     */
   public function getCategoria($id)
   {
    $stmt = self::$con->prepare("SELECT * FROM categoria WHERE c_id=:id");
    $stmt->execute(array(":id"=>$id));
    $categoria=$stmt->fetch(PDO::FETCH_ASSOC);
    return $categoria;
   }

      /**
     * Retorna toda la tabla de Voto con sus atributos
     *
     * @return String con la informacion de todos los registros de la tabla categoria.
     */
   public function readAllCategoria(){

      return self::read('categoria','CategoriaClass');
  }

      /**
     * Actualiza un registro de la tabla "categoria" segun su id.
     *
     */
   public function updateCategoria($id,$categoria)
   {
    try
    {
      self::execQuery("UPDATE categoria SET c_descripcion".$categoria->getDescripcion()."\' WHERE c_id=".$categoria->getId());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }
/**
     * Elimina un registro de la tabla "categoria" segun su id.
     *
     */
   public function deleteCategoria($categoria)
   {
    try
    {
      self::execQuery("DELETE FROM categoria WEHRE c_id=".$categoria->getId());

     return true;
    }
    catch(PDOException $e)
    {
     echo $e->getMessage();
     return false;
    }
   }
}
?>
