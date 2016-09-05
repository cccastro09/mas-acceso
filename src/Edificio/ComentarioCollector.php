<?php

  require '../../php/Collector.php';
  require 'ComentarioClass.php';
  class CollectorComentario extends Collector {
      
/**
     * Instancia un Colector de comentarios
     *
     * 
     */
   function __construct()
   {
    parent::__construct();
   }

      /**
     * Añade un nuevo comentario a la base de datos
     *
     */
   public function addComentario($edificio, $usuario, $comentario)
   {
     return self::execQuery("INSERT INTO comentario(c_id_edificio, c_id_usuario, c_contenido, c_fecha) VALUES (".$edificio->getId().",".$usuario->getId().",".$comentario->getContenido().",". getDate().")");   
   }

      /**
     * Retorna un comentario de la base de datos segun su Id
     *
     * @return String con la informacion del registro comentario segun su ID.
     */
   public function getComentario($id)
   {
    $stmt = self::$con->prepare("SELECT * FROM comentario WHERE id=:id");
    $stmt->execute(array(":id"=>$id));
    $comentario=$stmt->fetch(PDO::FETCH_ASSOC);
    return $comentario;
   }
      
      /**
     * Retorna toda la tabla de Comentario con sus atributos
     *
     * @return String con la informacion de todos los registros de la tabla comentario.
     */
   public function readAllComentario(){

      return self::read('comentario','comentario'); 
  }
      
      /**
     * Actualiza un registro de la tabla "comentario" segun su id.
     *
     */
   public function updateComentario($id,$comentario)
   {
    try
    {
      self::execQuery("UPDATE comentario SET c_contenido".$comentario->getContenido()."\' WHERE id=".$comentario->getId());

     return true; 
    }
    catch(PDOException $e)
    {
     echo $e->getMessage(); 
     return false;
    }
   }
/**
     * Elimina un registro de la tabla "comentario" segun su id.
     *
     */
   public function deleteComentario($comentario)
   {
    try
    {
      self::execQuery("DELETE FROM comentario WEHRE id=".$comentario->getId());

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
