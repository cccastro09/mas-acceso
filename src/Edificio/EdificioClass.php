<?php

namespace mas_aceso\Edificio;

use mas_aceso\Edificio\Reportes\ReporteCollector;
use mas_acceso\Edificio\Reportes\ReporteClass;
use mas_aceso\Edificio\Categorias\CategoriaCollector;
use mas_aceso\Edificio\Categorias\CategoriaClass;
use mas_aceso\Util\Functions as FNC;

/**
 * Un edificio accesible.
 */
class EdificioClass
{
    private $e_id;
    private $e_nombre;
    private $e_descripcion;
    private $e_id_reporte;
    private $e_id_categoria;

    public function __construct()
    {
        $this->e_id = FNC::guid();
    }

    /**
     * Retorna el id de la instancia de Edificio
     *
     * @return String El id del Edificio.
     */
    public function getId(): string
    {
        return $this->e_id;
    }

    /**
     * Retorna el nombre de la instancia de Edificio.
     *
     * @return String El nombre del Edificio.
     */
    public function getNombre(): string
    {
        return $this->e_nombre;
    }

    /**
     * Retorna la descripción de la instancia de Edificio.
     *
     * @return String La descripción
     */
    public function getDescripcion(): string
    {
        return $this->e_descripcion;
    }

    /**
     * Retorna el porcentaje de accesibilidad del edificio. 0-100 con 0 representando accesibilidad inexistente y 100 accesibilidad de excelencia.
     *
     * @return Integer EL procentaje de accesibilidad.
     */
    public function getAccesibilidad(): string
    {
        return $this->e_prcnt_accs;
    }

    /**
     * Retorna una instancia de ReporteClass dada por ReporteCollector. Es decir, retorna una instancia $r tal que $r->e_id==$this->e_id.
     *
     * @return ReporteClass El último reporte (y por lo tanto el efectivo) acerca del Edificio.
     */
    public function getReporte($colector): ReporteClass
    {
        return $colector->getById($this->e_report);
    }

    /**
     * Retorna una instancia de ReporteClass dada por ReporteCollector. Es decir, retorna una instancia $c tal que $c->e_id==$this->e_id.
     *
     * @return CategoriaClass La Categoría del Edificio.
     */
    public function getCategoria($colector): CategoriaClass
    {
        return $colector->getCategoria($this->e_id_categoria);
    }

    /**
     * Devuelve el id del reporte que describe el Edificio
     * @return string El id.
     */
    public function getReporteID(): string
    {
        return $this->e_id_reporte;
    }

    /**
     * Devuelve el id del reporte que describe el Edificio
     * @return string El id.
     */
    public function getCategoriaID(): string
    {
        return $this->e_id_categoria;
    }

    /**
     * Cambia el nombre del Edificio.
     *
     * @param String $n El nuevo nombre del Edificio.
     */
    public function setNombre($n)
    {
        $this->e_nombre = $n;
    }

    /**
     * Cambia el id del reporte del Edificio
     * @param ReporteClass $reporte el nuevo reporte del Edificio.
     */
    public function setReporte($reporte)
    {
        $this->e_id_reporte = $reporte->getId();
    }

    /**
     * Cambia la descripción del Edificio.
     *
     * @param String $n La nueva descripción del Edificio.
     */
    public function setDescripcion($n)
    {
        $this->e_descripcion = $n;
    }

    /**
     * Cambia la categoría del Edificio
     *
     * @param CategoriaClass $categoria La nueva Categoría del Edificio.
     */
    public function setCategoria($categoria)
    {
        $this->e_id_categoria = $categoria->getId();
    }
}
