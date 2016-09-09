<?php
namespace mas_acceso\Usuario\Discapacidades;

class DiscapacidadClass
{

    private $d_id;
    private $d_tipo;


    public function __construct()
    {
    }

    public function getD_id()
    {
        return $this->d_id;
    }


  public function getD_tipo(){
    return $this->d_tipo;
  }


  public function setD_id($d_id){
    $this->d_id = $d_id;
  }

  public function setD_tipo($d_tipo){
    $this->d_tipo = $d_tipo;
  }

}
