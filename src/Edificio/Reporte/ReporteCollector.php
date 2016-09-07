<?php
namespace mas_acceso\edificio\reporte;

use mas_acceso\util\Collector;
use mas_acceso\edificio\reporte\ReporteClass;

/**
 * Colector de Reporte
 */
class ReporteCollector extends Collector
{

    public function __construct()
    {
        parent::__construct();
    }

  /**
   * Obtiene todos los reportes agregar paginación es un TODO
   * @return mixed array() de ReporteClass o false si hubo algún error.
   */
    public function getAllReportes()
    {
        return self::read('reporte', ReporteClass::class);
    }

  /**
   * Obtiene un reporte en específico
   * @param  string $id El id del reporte.
   * @return mixed      El Reporte si se encuentra, caso contrario retorna false.
   */
    public function getReporte($id)
    {
        return parent::getById($id, 'reporte', 'r_id', ReporteClass::class);
    }

    /**
     * Agrega un nuevo reporte a la base
     * @param ReporteClass $e El reporte a agregar
     * @return mixed  ReporteClass en caso de éxito, caso contrario, false
     */
    public function addReporte($e)
    {
        return self::execQuery("INSERT INTO reporte VALUES(DEFAULT,'".$e->getNombre()."','".$e->getDescripcion()."',".$e->getReporteID().",".$e->getCategoriaID().")");
    }


    public function updateReporte($e)
    {
        try {
            self::execQuery("UPDATE reporte SET r_id=".$e->getId().",e_nombre='".$e->getNombre()."',e_descripcion='".$e->getDescripcion()."' WHERE r_id=".$e->getId());
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function deleteReporte($r_id)
    {
        try {
            self::execQuery("DELETE FROM reporte WHERE r_id=".$r_id);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
