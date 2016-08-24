<?php

class Rol
{
  private $id;
  private $descripcion_rol;
  function __construct(){
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function getDescripcion_rol(){
    return $this->descripcion_rol;
  }
  
  public function setId($id){
    $this->id = $id;
  }
  
  public function setDescripcion_rol($descripcion_rol){
    $this->descripcion_rol = $descripcion_rol;
  }
}

?>