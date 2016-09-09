<?php

  require '../../php/Collector.php';
  require 'CategoriaClass.php';
  class CollectorComentario extends Collector {
      
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
   public function addComentario($categoria)
   {
     return self::execQuery("INSERT INTO categoria(c_nombre, c_descripcion) VALUES (".$categoria->getNombre().",".$categoria->getDescripcion().")");   
   }

      /**
     * Retorna una categoria de la base de datos segun su Id
     *
     * @return String con la informacion del registro voto segun su ID.
     */
   public function getVoto($id)
   {
    $stmt = self::$con->prepare("SELECT * FROM voto WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $voto=$stmt->fetch(PDO::FETCH_ASSOC);
    return $voto;
   }
      
      /**
     * Retorna toda la tabla de Voto con sus atributos
     *
     * @return String con la informacion de todos los registros de la tabla voto.
     */
   public function readAllVoto(){

      return self::read('voto','voto'); 
  }
      
      /**
     * Actualiza un registro de la tabla "voto" segun su id.
     *
     */
   public function updateVoto($id,$voto)
   {
    try
    {
      self::execQuery("UPDATE voto SET v_valoracion".$voto->getValoracion()."\' WHERE id=".$voto->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }
/**
     * Elimina un registro de la tabla "voto" segun su id.
     *
     */
   public function deleteVoto($voto)
   {
    try
    {
      self::execQuery("DELETE FROM voto WEHRE id=".$voto->getId());

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
