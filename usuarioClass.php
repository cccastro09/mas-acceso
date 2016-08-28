<?php
class Usuario
{
    private $id_usuario;
    private $apellidos;
	private $nombres;
	private $usuario;
	private $contrasena;
	private $confContrasena;
	private $email;
	private $genero;
	private $fechaNacimiento;
	private $pais;
	private $tipoDiscapacidad;
	private $porcentajeDiscapacidad;
	
     function __construct($id_usuario, $apellidos, $nombres, $usuario, $contrasena, $confContrasena, $email, $genero, $fechaNacimiento, $pais, $tipoDiscapacidad, $porcentajeDiscapacidad) {
       $this->id_registro = $id_usuario;
	   $this->apellidos = $apellidos;
	   $this->nombres = $nombres;
	     $this->usuario = $usuario;
	   $this->contrasena = $contrasena;
	   $this->confContrasena = $confContrasena;
	     $this->email = $email;
	   $this->genero = $genero;
	   $this->fechaNacimiento = $fechaNacimiento;
	     $this->pais = $pais;
	   $this->tipoDiscapacidad = $tipoDiscapacidad;
	   $this->porcentajeDiscapacidad = $porcentajeDiscapacidad;
     }
     
     public function getId_usuario(){
		return $this->id_usuario;
	}

	public function setId_usuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getContrasena(){
		return $this->contrasena;
	}

	public function setContrasena($contrasena){
		$this->contrasena = $contrasena;
	}

	public function getConfContrasena(){
		return $this->confContrasena;
	}

	public function setConfContrasena($confContrasena){
		$this->confContrasena = $confContrasena;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getGenero(){
		return $this->genero;
	}

	public function setGenero($genero){
		$this->genero = $genero;
	}

	public function getFechaNacimiento(){
		return $this->fechaNacimiento;
	}

	public function setFechaNacimiento($fechaNacimiento){
		$this->fechaNacimiento = $fechaNacimiento;
	}

	public function getPais(){
		return $this->pais;
	}

	public function setPais($pais){
		$this->pais = $pais;
	}

	public function getTipoDiscapacidad(){
		return $this->tipoDiscapacidad;
	}

	public function setTipoDiscapacidad($tipoDiscapacidad){
		$this->tipoDiscapacidad = $tipoDiscapacidad;
	}

	public function getPorcentajeDiscapacidad(){
		return $this->porcentajeDiscapacidad;
	}

	public function setPorcentajeDiscapacidad($porcentajeDiscapacidad){
		$this->porcentajeDiscapacidad = $porcentajeDiscapacidad;
	}
}
?>

