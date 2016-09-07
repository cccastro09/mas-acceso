<?php
namespace mas_acceso\edificio;

use mas_acceso\edificio\reporte\ReporteCollector;
use mas_acceso\edificio\reporte\ReporteClass;
use mas_acceso\edificio\categorias\CategoriaCollector;
use mas_acceso\edificio\categorias\CategoriaClass;
use mas_acceso\util\Functions as FNC;

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
    }

    /**
     * Retorna el id de la instancia de Edificio
     *
     * @return String El id del Edificio.
     */
    public function getId(): int
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
     * Retorna una instancia de ReporteClass dada por ReporteCollector. Es decir, retorna una instancia $r tal que $r->e_id==$this->e_id.
     *
     * @return ReporteClass El último reporte (y por lo tanto el efectivo) acerca del Edificio.
     */
    public function getReporte(ReporteCollector $colector)
    {
        return $colector->getReporte($this->e_id_reporte);
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
     * @return mixed El id.
     */
    public function getReporteID()
    {
        return is_null($this->e_id_reporte) ? "NULL":$this->e_id_reporte;
    }

    /**
     * Devuelve el id del reporte que describe el Edificio
     * @return mixed El id.
     */
    public function getCategoriaID()
    {
        return is_null($this->e_id_categoria) ? "NULL":$this->e_id_categoria;
    }

    public function setId($id)
    {
        $this->e_id = $id;
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
