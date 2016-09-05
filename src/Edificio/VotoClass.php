<?php

namespace mas_aceso\Edificio;

use mas_aceso\Edificio\EdificioCollector;
use mas_aceso\Usuario\UsuarioCollector;
/**
 *
 */
class EdificioClass
{
    private $v_id;
    private $v_id_edificio;
    private $v_id_usuario;
    private $v_valoracion;
    private $v_fecha;
    

    public function __construct()
    {
    }

    /**
     * Retorna el id de la instancia de Edificio
     *
     * @return String El id del Edificio.
     */
    public function getId()
    {
        return $this->$v_id;
    }

    /**
     * Retorna el nombre de la instancia de Edificio.
     *
     * @return String El nombre del Edificio.
     */
    public function getIdEdificio()
    {
        return $v_id_edificio;
    
    }

    /**
     * Retorna la descripción de la instancia de Edificio.
     *
     * @return String La descripción
     */
    public function getIdUsuario()
    {
        private $v_id_usuario;
    
    }

    /**
     * Retorna el porcentaje de accesibilidad del edificio. 0-100 con 0 representando accesibilidad inexistente y 100 accesibilidad de excelencia.
     *
     * @return Integer EL procentaje de accesibilidad.
     */
    public function getValoracion()
    {
        return $v_valoracion;
    
    }

    /**
     * Retorna una instancia de ReporteClass dada por ReporteCollector. Es decir, retorna una instancia $r tal que $r->e_id==$this->e_id.
     *
     * @return ReporteClass El último reporte (y por lo tanto el efectivo) acerca del Edificio.
     */
    public function getFecha()
    {
        return $v_fecha;
    }

    /**
     * Retorna una instancia de ReporteClass dada por ReporteCollector. Es decir, retorna una instancia $c tal que $c->e_id==$this->e_id.
     *
     * @return CategoriaClass La Categoría del Edificio.
     */
    public function getEdificio()
    {
        return EdificioCollector::getById($this->$v_id_edificio);
    }
    
     public function getUsuario()
    {
        return UsuarioCollector::getById($this->$v_id_usuario);
    }

    
    /**
     * Cambia el nombre del Edificio.
     *
     * @param String $n El nuevo nombre del Edificio.
     */
    public function setIdEdificio($n)
    {
        this->$v_id_edificio = $n;
    
    }

    /**
     * Cambia la descripción del Edificio.
     *
     * @param String $n La nueva descripción del Edificio.
     */
    public function setIdUsuario($n)
    {
        this->$v_id_usuario = $n;
    
    }

    /**
     * Cambia la categoría del Edificio
     *
     * @param CategoriaClass $categoria La nueva Categoría del Edificio.
     */
    public function setValoracion($n)
    {
        this->$v_valoracion=$n;
    
    }
    public function setFecha($n)
    {
        this->$v_fecha=$n;
    
    }
    
    
}
