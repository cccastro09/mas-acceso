<?php

namespace mas_aceso\Usuario;

/**
 *
 */
class CategoriaClass
{
    private $c_id;
    private $c_nombre;
    private $c_descripcion;

    public function __construct()
    {
    }

    /**
     * Retorna el id de la instancia de la categoria
     *
     * @return String El id del Categoria.
     */
    public function getId()
    {
        return $this->$c_id;
    }

    /**
     * Retorna el nombre de la categoria.
     *
     * @return String El nombre de la categoria.
     */
    public function getNombre()
    {
        return $c_nombre;
    
    }

    /**
     * Retorna la descripcion de la categoria.
     *
     * @return String de la descripcion de la categoria.
     */
    public function getDescripcion()
    {
        private $c_descripcion;
    
    }

    
    /**
     * Cambia el id del Edificio.
     *
     * @param String $n El nuevo id del Edificio correspondiente al voto.
     */
    
    public function setNombre($n)
    {
        this->$c_nombre = $n;
    
    }

    /**
     * Cambia la valoracion de la descripcion de la categoria
     *
     * @param String $n la nueva descripcion de la categoria correspondiente al Edificio.
     */
    public function setDescripcion($n)
    {
        this->$c_descripcion=$n;
    
    }
    
    
    
}
