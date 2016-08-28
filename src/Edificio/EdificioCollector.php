<?php
namespace mas_acceso\Edificio;

use mas_acceso\Util\Collector;
use mas_acceso\Edificio\EdificioClass;

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
        parent::read('edificio', 'Edificio');
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
}
