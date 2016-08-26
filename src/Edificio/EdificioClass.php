<?php

namespace mas_aceso\Edificio;

using mas_aceso\Edificio\Reportes\ReporteCollector;
using mas_aceso\Edificio\Categorias\CategoriaCollector;
/**
 *
 */
class EdificioClass
{
    private $e_id;
    private $e_name;
    private $e_dscr;
    private $e_prcnt_accs;
    private $e_report;
    private $e_cid;

    public function __construct()
    {

    }

    /**
     * Retorna el id de la instancia de Edificio
     * @return String El id del Edificio.
     */
    public function getId()
    {
      return $this->$e_id;
    }

    /**
     * Retorna el nombre de la instancia de Edificio.
     * @return String El nombre del Edificio.
     */
    public function getNombre()
    {
      return $this->$e_name;
    }

    /**
     * Retorna la descripción de la instancia de Edificio.
     * @return String La descripción
     */
    public function getDescripcion()
    {
      return $this->$e_dscr;
    }

    /**
     * Retorna el porcentaje de accesibilidad del edificio. 0-100 con 0 representando accesibilidad inexistente y 100 accesibilidad de excelencia.
     * @return Integer EL procentaje de accesibilidad.
     */
    public function getAccesibilidad()
    {
      return $this->$e_prcnt_accs;
    }

    /**
     * Retorna una instancia de ReporteClass dada por ReporteCollector. Es decir, retorna una instancia $r tal que $r->e_id==$this->e_id.
     * @return ReporteClass El último reporte (y por lo tanto el efectivo) acerca del Edificio.
     */
    public function getReporte()
    {
      return ReporteCollector::getById($this->$e_report);
    }

    /**
     * Retorna una instancia de ReporteClass dada por ReporteCollector. Es decir, retorna una instancia $c tal que $c->e_id==$this->e_id.
     * @return CategoriaClass La Categoría del Edificio.
     */
    public function getCategoria()
    {
      return CategoriaCollector::getById($this->$e_cid);
    }

    /**
     * Cambia el nombre del Edificio.
     * @param String $n El nuevo nombre del Edificio.
     */
    public function setNombre($n)
    {
      $this->$e_name = $n;
    }

    /**
     * Cambia la descripción del Edificio.
     * @param String $n La nueva descripción del Edificio.
     */
    public function setDescripcion($n)
    {
      $this->$e_dscr = $n;
    }

    /**
     * Cambia la categoría del Edificio
     * @param CategoriaClass $categoria La nueva Categoría del Edificio.
     */
    public function setCategoria($categoria)
    {
      $this->$e_cid = $categoria->getId();
    }

}
?>
