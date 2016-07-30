<?php

class Login
{

    private $id_usuario;
    private $usuario;
	private $password;
	
     function __construct($id_usuario, $usuario, $password) {
       $this->id_usuario = $id_usuario;
	   $this->usuario = $usuario;
	   $this->password = $password;
     }
}

?>
