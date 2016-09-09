<?php
namespace mas_acceso\edificio\reporte;

/**
 * Reporte detallado
 */
class ReporteDetalladoClass
{
    private $r_id;
    private $r_fecha;
    private $r_id_edificio;
    private $r_calificacion;
    private $r_rampas;
    private $r_ascensores;
    private $r_pasamanos;
    private $r_pasillos;
    private $r_banos;
    private $r_entradas_salidas;

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
        return $this->r_id_edificio;
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
    public function setEdificioID($e)
    {
        $this->r_id_edificio = $e;
    }


    /**
     * Cambia la calificacion del Reporte
     *
     * @param string $c La nueva calificacion.
     */
    public function setCalificacion()
    {
        $c =
        intval($this->r_rampas)+
        intval($this->r_ascensores)+
        intval($this->r_pasamanos)+
        intval($this->r_pasillos)+
        intval($this->r_banos)+
        intval($this->r_entradas_salidas);
        $c = $c/6;
        switch (intval($c)) {
            case 1:
                $this->r_calificacion = "E";
                break;

            case 2:
                $this->r_calificacion = "D";
                break;

            case 3:
                $this->r_calificacion = "C";
                break;

            case 4:
                $this->r_calificacion = "B";
                break;

            case 5:
                $this->r_calificacion = "A";
                break;

            default:
                $this->r_calificacion = "F";
                break;
        }
    }

    public function getRampas()
    {
        return $this->r_rampas;
    }

    public function getAscensores()
    {
        return $this->r_ascensores;
    }

    public function getPasamanos()
    {
        return $this->r_pasamanos;
    }

    public function getPasillos()
    {
        return $this->r_pasillos;
    }

    public function getBanos()
    {
        return $this->r_banos;
    }

    public function getEntradasSalidas()
    {
        return $this->r_entradas_salidas;
    }


    public function setRampas($r)
    {
        $this->r_rampas=$r;
    }

    public function setAscensores($r)
    {
        $this->r_ascensores=$r;
    }

    public function setPasamanos($r)
    {
        $this->r_pasamanos=$r;
    }

    public function setPasillos($r)
    {
        $this->r_pasillos=$r;
    }

    public function setBanos($r)
    {
        $this->r_banos=$r;
    }

    public function setEntradasSalidas($r)
    {
        $this->r_entradas_salidas=$r;
    }
}
