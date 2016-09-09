<?php


/**
 *
 */
 namespace mas_acceso\edificio\categoria;

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
        return $this->c_id;
    }

    /**
     * Retorna el nombre de la categoria.
     *
     * @return String El nombre de la categoria.
     */
    public function getNombre()
    {
        return $this->c_nombre;
    }

    /**
     * Retorna la descripcion de la categoria.
     *
     * @return String de la descripcion de la categoria.
     */
    public function getDescripcion()
    {
        return $this->c_descripcion;
    }


    /**
     * Cambia el id del Edificio.
     *
     * @param String $n El nuevo id del Edificio correspondiente a la categoria.
     */

    public function setNombre($n)
    {
        $this->c_nombre = $n;
    }

    public function setId($n)
    {
        $this->c_id = $n;
    }

    /**
     * Cambia la valoracion de la descripcion de la categoria
     *
     * @param String $n la nueva descripcion de la categoria correspondiente al Edificio.
     */
    public function setDescripcion($n)
    {
        $this->c_descripcion=$n;
    }
}
