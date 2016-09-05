<?php
namespace mas_acceso\edificio;

use mas_acceso\util\Collector;
use mas_acceso\edificio\Edificio;

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
        return self::read('edificio', 'EdificioClass');
    }

  /**
   * Obtiene un edificio en específico
   * @param  string $id El id del edificio.
   * @return mixed      El Edificio si se encuentra, caso contrario retorna false.
   */
    public function getEdificio($id)
    {
        parent::getById($id, 'edificio', 'e_id', 'Edificio');
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
}
