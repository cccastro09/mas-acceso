<?php
namespace mas_acceso\edificio\reporte;

use mas_acceso\edificio\reportes\ReporteClass;
use mas_acceso\util\Functions as FNC;

/**
 * Un edificio accesible.
 */
class ReporteClass
{
    private $r_id;
    private $r_fecha;
    private $r_id_dificio;
    private $r_calificacion;

    public function __construct()
    {
    }

    /**
     * Retorna el id de la instancia de Reporte
     *
     * @return String El id del Reporte.
     */
    public function getId(): int
    {
        return $this->r_id;
    }

    /**
     * Devuelve el id del edificio que describe este Reporte
     * @return int El id.
     */
    public function getEdificioID(): int
    {
        return $this->r_id_dificio;
    }

    /**
     * Devuelve el id del reporte que describe el Reporte
     * @return string El id.
     */
    public function getCalificacion(): string
    {
        return $this->r_calificacion;
    }

    public function setId($id)
    {
        $this->r_id = $id;
    }

    public function getFecha()
    {
        return $this->r_fecha;
    }

    /**
     * Asigna el reporte a un edificio
     * @param EdificioClass $e El nuevo edificio.
     */
    public function setEdificio($e)
    {
        $this->r_id_dificio = $e->getId();
    }


    /**
     * Cambia la calificacion del Reporte
     *
     * @param string $c La nueva calificacion.
     */
    public function setCalificacion($c)
    {
        $this->r_calificacion = $c;
    }
}
