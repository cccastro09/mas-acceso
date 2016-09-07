<?php
namespace mas_acceso\usuario\Permiso;



class PermisoClass
{
    private $p_id;
    private $p_constante;
    private $p_descripcion;
    
    public function setId($id)
    {
        $this->p_id=$id;
    }
    public function getId()
    {
        return $this->p_id;
    }
    public function setDescripcion($n)
    {
        $this->p_descripcion=$n;
    }
    public function getDescripcion()
    {
        return $this->p_descripcion;
    }
    public function setConstante($c)
    {
        $this->p_constante=$c;
    }
    public function getConstante()
    {
        return $this->p_constante;
    }
}
