<?php


  namespace mas_acceso\edificio\voto;
  use mas_acceso\util\Collector;
  use mas_acceso\edificio\VotoClass;
  class VotoCollector extends Collector {

/**
     * Instancia un Colector de votos
     *
     *
     */
   function __construct()
   {
    parent::__construct();
   }

      /**
     * Añade un nuevo voto a la base de datos
     *
     */
   public function addVoto($voto)
   {
     $sentencia=("INSERT INTO public.voto(
            v_id_edificio, v_id_usuario, v_valoracion)
    VALUES (".$voto->getIdEdificio().",".$voto->getIdUsuario().",'".$voto->getValoracion()."')");
    /*echo $sentencia;*/
     self::execQuery($sentencia);
       return true;
   }

      /**
     * Retorna un voto de la base de datos segun su Id
     *
     * @return String con la informacion del registro voto segun su ID.
     */
   public function getVoto($id)
   {
    return parent::getById($id, 'voto', 'v_id', VotoClass::class);
   }

   public function getPromedioByEdificio($voto)
   {
     $sentencia=("SELECT AVG (v_valoracion) FROM public.voto WHERE v_id=". $voto->getIdEdificio);
    /*echo $sentencia;*/
     self::execQuery($sentencia);
       return true;
   }

      /**
     * Retorna toda la tabla de voto con sus atributos
     *
     * @return String con la informacion de todos los registros de la tabla voto.
     */
   public function readAllVoto(){

      return self::read('voto', VotoClass::class);
  }

      /**
     * Actualiza un registro de la tabla "voto" segun su id.
     *
     */
   public function updateVoto($id,$voto)
   {
    try
    {
      self::execQuery("UPDATE voto SET v_valoracion".$voto->getValoracion()."\' WHERE v_id=".$voto->getId());

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
   public function deleteVoto($id)
   {
    try
    {
      self::execQuery("DELETE FROM public.voto
 WHERE v_id=".$id);

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
