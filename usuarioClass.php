<?php

class Registro
{

    private $id_registro;
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
	
     function __construct($id_registro, $apellidos, $nombres, $usuario, $contrasena, $confContrasena, $email, $genero, $fechaNacimiento, $pais, $tipoDiscapacidad, $porcentajeDiscapacidad) {
       $this->id_registro = $id_registro;
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
}

?>
