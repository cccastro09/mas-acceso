<?php

class rol
{
  private $r_id;
  private $r_constante;
  private $r_nombre;
  
  function __construct()
  {
  
  }
  
  public function getId(){
    return $this->r_id;
  }
  
  public function getConstante(){
    return $this->r_constante;
  }
  
  public function getNombre(){
    return $this->r_nombre;
  }
  
  public function setId($r_id){
    $this->r_id = $r_id;
  }
  
  public function setConstante($r_constate){
    $this->r_constante = $r_constante;
  }
  
  public function setNombre($r_nombre){
    $this->r_nombre = $r_nombre;
  }
  
}

?>