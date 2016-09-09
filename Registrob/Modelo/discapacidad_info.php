<?php

class discapacidad_info
{
  private $d_id;
  private $d_tipo;
    
  function __construct()
  {
  
  }
  
  public function getId(){
    return $this->d_id;
  }
  
  public function getTipo(){
    return $this->d_tipo;
  }
  
  public function setId($d_id){
    $this->d_id = $d_id;
  }
  
  public function setTipo($d_tipo){
    $this->d_tipo = $d_tipo;
  }
    
}

?>