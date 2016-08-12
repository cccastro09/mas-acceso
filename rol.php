<?php
namespace mas_acceso\Authenfication

class Rol {
	private $ur_id;
	private $ur_const;
	private $ur_name;
	function __construct(){
		
	}
	public function setUr_id($id){
		$this->ur_id=$id;
		
	}
	public function getUr_id(){
		return $this->ur_id;
	}
	public function setUr_const($const){
		$this->ur_const=$const;
	}
	public function getUr_const(){
		return $this->ur_const;
		
	}
	public function setUr_name($name){
		$this->ur_name=$name;
	}
	public function getUr_name(){
		return $this->ur_name;
	}
}