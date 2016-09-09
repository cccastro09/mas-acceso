<?php
namespace mas_acceso\Usuario\Discapacidades;

class DiscapacidadClass
{

    private $d_id;
    private $d_nombre;


    public function __construct()
    {
    }

    public function getD_id()
    {
        return $this->d_id;
    }


  public function getD_nombre(){
    return $this->d_nombre;
  }


  public function setD_id($d_id){
    $this->d_id = $d_id;
  }

  public function setD_tipo($d_nombre){
    $this->d_nombre = $d_nombre;
  }

}
