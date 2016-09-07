<?php
namespace mas_acceso\edificio;

use mas_acceso\util\Collector;
use mas_acceso\edificio\EdificioClass;

/**
 * Colector de Edificio
 */
class EdificioCollector extends Collector
{

    public function __construct()
    {
        parent::__construct();
    }

  /**
   * Obtiene todos los edificios agregar paginación es un TODO
   * @return mixed array() de EdificioClass o false si hubo algún error.
   */
    public function getAllEdificios()
    {
        return self::read('edificio', EdificioClass::class);
    }

  /**
   * Obtiene un edificio en específico
   * @param  string $id El id del edificio.
   * @return mixed      El Edificio si se encuentra, caso contrario retorna false.
   */
    public function getEdificio($id)
    {
        return parent::getById($id, 'edificio', 'e_id', EdificioClass::class);
    }

    /**
     * Agrega un nuevo edificio a la base
     * @param EdificioClass $e El edificio a agregar
     * @return mixed  EdificioClass en caso de éxito, caso contrario, false
     */
    public function addEdificio($e)
    {
        return self::execQuery("INSERT INTO edificio VALUES(DEFAULT,'".$e->getNombre()."','".$e->getDescripcion()."',".$e->getReporteID().",".$e->getCategoriaID().")");
    }


    public function updateEdificio($e)
    {
        try {
            self::execQuery("UPDATE edificio SET e_id=".$e->getId().",e_nombre='".$e->getNombre()."',e_descripcion='".$e->getDescripcion()."' WHERE e_id=".$e->getId());
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function deleteEdificio($e_id)
    {
        try {
            self::execQuery("DELETE FROM edificio WHERE e_id=".$e_id);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
