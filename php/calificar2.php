<?php

 class Demo {
  
  private $id;
  private $calificacion;
  private $comentario;

  
  public function __construct(){
    
  }
  
  public function getId(){
    return $this->id;
  }
  
  public function getCalificacion(){
    return $this->calificacion;
  }
  
   
  public function setId($id){
    $this->id = $id;
  }
  
  public function setCalificacion($calificacion){
    $this->nombre = $calificacion;
  }
  
  public function getComentario(){
    return $this->comentario;
  }
     
  public function setComentario($comentario){
    $this->comentario = $comentario;
  }
  
  
}
