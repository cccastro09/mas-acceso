<?php

/**
 *
 */
 namespace mas_acceso\edificio\voto;
class VotoClass
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
     * Retorna el id de la instancia de Voto
     *
     * @return String El id del Voto.
     */
    public function getId()
    {
        return $this->v_id;
    }

    /**
     * Retorna el id del Edificio sobre el cual se esta votando.
     *
     * @return String El Id del Edificio sobre el cual se comento.
     */
    public function getIdEdificio()
    {
        return $this->v_id_edificio;

    }

    /**
     * Retorna el id del Usuario que esta votando.
     *
     * @return String El Id del Usuario que comento.
     */
    public function getIdUsuario()
    {
        return $this->v_id_usuario;

    }

    /**
     * Retorna la valoracion que dio el usuario hacia el edificio
     *
     * @return Integer EL procentaje de accesibilidad.
     */
    public function getValoracion()
    {
        return $this->v_valoracion;

    }

    /**
     * Retorna la fecha en la que se realizo el voto
     *
     * @return String Fecha del voto
     */
    public function getFecha()
    {
        return $this->v_fecha;
    }

    /**
     * Retorna una instancia de EdificioClass dada por EdificioCollector. Es decir, retorna una instancia $c tal que $c->e_id==$this->e_id.
     *
     * @return EdificioClass los datos del Edificio.
     */
    public function getEdificio()
    {
        return EdificioCollector::getById($this->v_id_edificio);
    }

    /**
     * Retorna una instancia de UsuarioClass dada por UsuarioCollector. Es decir, retorna una instancia $c tal que $c->e_id==$this->e_id.
     *
     * @return UsuarioClass los datos del Usuario.
     */
     public function getUsuario()
    {
        return UsuarioCollector::getById($this->v_id_usuario);
    }


    /**
     * Cambia el id del Edificio.
     *
     * @param String $n El nuevo id del Edificio correspondiente al voto.
     */
    public function setIdEdificio($n)
    {
        $this->v_id_edificio = $n;

    }

    /**
     * Cambia el id del Usuario.
     *
     * @param String $n el nuevo Id del Usuario.
     */
    public function setIdUsuario($n)
    {
        $this->v_id_usuario = $n;

    }

    /**
     * Cambia la valoracion del voto correspondiente al Edificio
     *
     * @param Integer $n la nueva valoracion del mensaje correspondiente al Edificio.
     */
    public function setValoracion($n)
    {
        $this->v_valoracion=$n;

    }

    /**
     * Cambia la fecha del voto correspondiente al Edificio
     *
     * @param String $n la nueva fecha del mensaje correspondiente al Edificio.
     */
    public function setFecha($n)
    {
        $this->v_fecha=$n;

    }


}
