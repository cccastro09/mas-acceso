<?php


class usuario_info
{
	private $u_id;
	private $u_nombre;
	private $u_apellidos;
	private $u_mail;
	private $u_sexo;
	private $u_fecha_nacimiento;
	private $u_pais;
	private $u_tipo_discapacidad;
	private $u_porcentajediscapacidad;
	private $u_role;
	private $u_usuario;
  
	public function __construct(){
		
	}
  
	public function getId(){
		return $this->u_id;
	}

	public function setId($u_id){
		$this->u_id = $u_id;
	}

	public function getNombre(){
		return $this->u_nombre;
	}

	public function setNombre($u_nombre){
		$this->u_nombre = $u_nombre;
	}

	public function getApellidos(){
		return $this->u_apellidos;
	}

	public function setApellidos($u_apellidos){
		$this->u_apellidos = $u_apellidos;
	}
 
	public function getMail(){
		return $this->u_mail;
	}

	public function setMail($u_mail){
		$this->u_mail = $u_mail;
	}
	
	public function getSexo(){
		return $this->u_sexo;
	}

	public function setSexo($u_sexo){
		$this->u_sexo = $u_sexo;
	}
	
	public function getFecha_nacimiento(){
		return $this->u_fecha_nacimiento;
	}

	public function setFecha_nacimiento($u_fecha_nacimiento){
		$this->u_fecha_nacimiento = $u_fecha_nacimiento;
	}
	
	public function getPais(){
		return $this->u_pais;
	}

	public function setPais($u_pais){
		$this->u_pais = $u_pais;
	}
	
	public function getTipodiscapacidad(){
		return $this->u_tipo_discapacidad;
	}

	public function setTipodiscapacidad($u_tipo_discapacidad){
		$this->u_tipo_discapacidad = $u_tipo_discapacidad;
	}
	
	public function getPorcentajediscapacidad(){
		return $this->u_porcentajediscapacidad;
	}

	public function setPorcentajediscapacidad($u_porcentajediscapacidad){
		$this->u_porcentajediscapacidad = $u_porcentajediscapacidad;
	}
	
	public function getRole(){
		return $this->u_role;
	}

	public function setRole($u_role){
		$this->u_role = $u_role;
	}
	
	public function getUsuario(){
		return $this->u_usuario;
	}

	public function setUsuario($u_usuario){
		$this->u_usuario = $u_usuario;
	}
}