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

    public function getAllReportesDetallados()
    {
        return self::read('reporte, reporte_info WHERE reporte.r_id=reporte_info.r_id', ReporteDetalladoClass::class);
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

    public function getReporteDetallado($id)
    {
        try {
            $queryRead= 'SELECT * FROM reporte, reporte_info WHERE reporte.r_id=:e_id AND reporte_info.r_id=:e_id';
            $stmt = $this->con->prepare($queryRead);
            $stmt->execute(array(':e_id'=>intval($id)));
            $result = $stmt->fetchObject(ReporteDetalladoClass::class);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * Agrega un nuevo reporte a la base
     * @param ReporteClass $e El reporte a agregar
     * @return mixed  ReporteClass en caso de éxito, caso contrario, false
     */
    public function addReporte(ReporteDetalladoClass $e)
    {
        try {
            $rtmp = self::execQueryReturning("INSERT INTO reporte VALUES(DEFAULT, ".$e->getEdificioID().",DEFAULT,'".$e->getCalificacion()."') RETURNING r_id", ReporteClass::class);
            if (!$rtmp) {
                return false;
            }
            self::execQuery("INSERT INTO reporte_info VALUES(".$rtmp->getId().",".$e->getRampas().",".$e->getAscensores().
            ",".$e->getPasamanos().
            ",".$e->getPasillos().
            ",".$e->getBanos().
            ",".$e->getEntradasSalidas().
            ")");
            return $rtmp->getId();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function updateReporteDetallado($e)
    {
        try {
            self::execQuery("UPDATE reporte SET r_id_edificio='".$e->getEdificioID()
            ."', r_fecha=DEFAULT"
            .", r_calificacion='".$e->getCalificacion()
            ."' WHERE r_id=".$e->getId());
            self::execQuery("UPDATE  reporte_info SET"
            ." r_rampas=".$e->getRampas()
            .", r_ascensores=".$e->getAscensores()
            .", r_pasamanos=".$e->getPasamanos()
            .", r_pasillos=".$e->getPasillos()
            .", r_banos=".$e->getBanos()
            .", r_entradas_salidas=".$e->getEntradasSalidas()
            ." WHERE r_id=".$e->getId());
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function updateReporte($e)
    {
        try {
            self::execQuery("UPDATE reporte SET r_id_edificio='".$e->getEdificioID()."',r_fecha='".$e->getFecha()."',r_calificacion='".$e->getCalificacion()."' WHERE r_id=".$e->getId());
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
