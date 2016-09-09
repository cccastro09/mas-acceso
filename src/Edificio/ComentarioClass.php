<?php

namespace mas_aceso\Edificio;

use mas_aceso\Edificio\EdificioCollector;
use mas_aceso\Usuario\UsuarioCollector;
/**
 *
 */
class ComentarioClass
{
    private $c_id;
    private $c_id_edificio;
    private $c_id_usuario;
    private $c_contenido;
    private $c_fecha;
    

    public function __construct()
    {
    }

    /**
     * Retorna el id de la instancia de Comentario
     *
     * @return String El id del Comentario.
     */
    public function getId()
    {
        return $this->$c_id;
    }

    /**
     * Retorna el id del Edificio sobre el cual se esta comentando.
     *
     * @return String El Id del Edificio sobre el cual se comento.
     */
    public function getIdEdificio()
    {
        return $c_id_edificio;
    
    }

    /**
     * Retorna el id del Usuario que esta comentando.
     *
     * @return String El Id del Usuario que comento.
     */
    public function getIdUsuario()
    {
        private $c_id_usuario;
    
    }

    /**
     * Retorna el comentario que dio el usuario hacia el edificio
     *
     * @return String EL procentaje de accesibilidad.
     */
    public function getContenido()
    {
        return $c_contenido;
    
    }

    /**
     * Retorna la fecha en la que se realizo el comentario
     *
     * @return String Fecha del comentario
     */
    public function getFecha()
    {
        return $c_fecha;
    }

    /**
     * Retorna una instancia de EdificioClass dada por EdificioCollector. Es decir, retorna una instancia $c tal que $c->e_id==$this->e_id.
     *
     * @return EdificioClass los datos del Edificio.
     */
    public function getEdificio()
    {
        return EdificioCollector::getById($this->$v_id_edificio);
    }
    
    /**
     * Retorna una instancia de UsuarioClass dada por UsuarioCollector. Es decir, retorna una instancia $c tal que $c->e_id==$this->e_id.
     *
     * @return UsuarioClass los datos del Usuario.
     */
     public function getUsuario()
    {
        return UsuarioCollector::getById($this->$v_id_usuario);
    }

    
    /**
     * Cambia el id del Edificio.
     *
     * @param String $n El nuevo id del Edificio correspondiente al comentario.
     */
    public function setIdEdificio($n)
    {
        this->$c_id_edificio = $n;
    
    }

    /**
     * Cambia el id del Usuario.
     *
     * @param String $n el nuevo Id del Usuario.
     */
    public function setIdUsuario($n)
    {
        this->$c_id_usuario = $n;
    
    }

    /**
     * Cambia la valoracion del comentario correspondiente al Edificio
     *
     * @param Integer $n la nueva valoracion del mensaje correspondiente al Edificio.
     */
    public function setContenido($n)
    {
        this->$c_contenido=$n;
    
    }
    
    /**
     * Cambia la fecha del comentario correspondiente al Edificio
     *
     * @param String $n la nueva fecha del comentario correspondiente al Edificio.
     */
    public function setFecha($n)
    {
        this->$c_fecha=$n;
    
    }
    
    
}