<?php
namespace mas_acceso\Usuario\Discapacidades;

 class DiscapacidadClass {

  private $d_id;
  private $d_tipo;


  public function __construct(){

  }

  public function getD_id(){
    return $this->d_id;
  }

  public function getD_tipo(){
    return $this->d_tipo;
  }


  public function setId($d_id){
    $this->id = $d_id;
  }

  public function setNombre($d_tipo){
    $this->nombre = $nombre;
  }


}
