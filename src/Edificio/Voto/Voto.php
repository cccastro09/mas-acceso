<?php

public class Voto {
  
  private $u_id;
  private $e_id;
  private $v_id;
  private $v_val;
  
  pubic function __construct(){
    
  }
  
  public function getV_val(){
    return $this->v_val;
  }
  
  public function getV_id(){
    return $this->v_id;
  }
  
  public function getE_id(){
    return $this->e_id;
  }
  
  public function getU_id(){
    return $this->u_id;
  }
  
  public function setV_val($v_val){
    $this->v_val = $v_val;
  }
  
  public function setV_id($v_id){
    $this->v_id = $v_id;
  }
  
  public function setE_id($e_id){
    $this->e_id=$e_id;
  }
  
  public function setU_id($u_id){
    $this->u_id = $u_id;
  }
}