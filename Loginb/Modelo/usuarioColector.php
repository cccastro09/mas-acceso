<?php
  
  require("collector.php");
  require 'usuario.php';
  require 'usuario_info.php';
  require 'rol.php';
  require 'discapacidad_info.php';
  
  class usuarioColector extends collector {
	
	function __construct()
	{
		parent::__construct();
	}

	public function insertarUsuario($usuario)
	{
		try
		{
			self::execQuery("INSERT INTO usuario (u_usuario, u_password) VALUES ('".$usuario->getUsuario()."','".$usuario->getPassword()."') ");
			
			$stmt = $this->con->prepare("SELECT * FROM usuario ORDER BY u_id DESC limit 1");
			$stmt->execute();
			$usuario = $stmt->fetchObject("Usuario");
			return $usuario;		
		}
		catch(PDOException $e)
		{
			echo $e->getMessage(); 
			return false;
		}
	} 
	
	
	public function insertarUsuarioInfo($usuario_info)
	{
		try
		{
			self::execQuery("INSERT INTO usuario_info (u_nombre, u_apellidos, u_mail, u_sexo, u_fecha_nacimiento, u_pais, u_tipo_discapacidad, u_porcentajediscapacidad, u_role, u_usuario) VALUES ('".$usuario_info->getNombre()."','".$usuario_info->getApellidos()."','".$usuario_info->getMail()."','".$usuario_info->getSexo()."','".$usuario_info->getFecha_nacimiento()."','".$usuario_info->getPais()."',".$usuario_info->getTipodiscapacidad().",'".$usuario_info->getPorcentajediscapacidad()."',".$usuario_info->getRole().",".$usuario_info->getUsuario().") ");
			return true; 
		}
		catch(PDOException $e)
		{
			echo $e->getMessage(); 
			return false;
		}
	}
	
	public function consultarUsuario()
	{
		return self::read('usuario','Usuario'); 
	}
	
	public function consultarUsuarioPorId($id)
	{
		$stmt = $this->con->prepare("SELECT * FROM usuario WHERE u_id=:id");
		$stmt->execute(array(":id"=>$id));
		$usuario=$stmt->fetchObject("Usuario");
		return $usuario;
	}
   
	public function consultarUsuarioInfoPorIdUsuario($id)
	{
		$stmt = $this->con->prepare("SELECT * FROM usuario_info WHERE u_usuario=:id");
		$stmt->execute(array(":id"=>$id));
		$usuario_info=$stmt->fetchObject("usuario_info");
		return $usuario_info;
	}
	
	public function updateUsuario($usuario)
	{
		try
		{
			self::execQuery("UPDATE usuario SET u_usuario='".$usuario->getUsuario()."',password='".$usuario->getPassword()."' WHERE u_id=".$usuario->getId());
			return true; 
		}
		catch(PDOException $e)
		{
			echo $e->getMessage(); 
			return false;
		}
	}
	
public function delete($id)
	{
		try
		{
			self::execQuery("DELETE FROM usuario_info WHERE u_usuario=".$id);
			self::execQuery("DELETE FROM voto WHERE v_id_usuario=".$id);
			self::execQuery("DELETE FROM comentario WHERE c_id_usuario=".$id);
			self::execQuery("DELETE FROM usuario WHERE u_id=".$id);
			
			return true; 
		}
		catch(PDOException $e)
		{
			echo $e->getMessage(); 
			return false;
		}
	}
	
	public function deleteUsuario($id)
	{
		try
		{
			self::execQuery("DELETE FROM usuario WHERE u_id=".$id);
			return true; 
		}
		catch(PDOException $e)
		{
			echo $e->getMessage(); 
			return false;
		}
	} 
	
	public function deleteUsuarioInfo($id)
	{
		try
		{
			self::execQuery("DELETE FROM usuario_info WHERE u_usuario=".$id);
			return true; 
		}
		catch(PDOException $e)
		{
			echo $e->getMessage(); 
			return false;
		}
	} 
	
	public function consultarRol()
	{
		return self::read('rol','Rol'); 
	}
	
	public function consultarRolePorId($id)
	{
		$stmt = $this->con->prepare("SELECT * FROM rol WHERE r_id=:id");
		$stmt->execute(array(":id"=>$id));
		$role=$stmt->fetchObject("rol");
		return $role;
	}
	
	public function consultarDiscapacidadInfo()
	{
		return self::read('discapacidad_info','discapacidad_info'); 
	}
	
	public function consultarDiscapacidadInfoPorId($id)
	{
		$stmt = $this->con->prepare("SELECT * FROM discapacidad_info WHERE d_id=:id");
		$stmt->execute(array(":id"=>$id));
		$discapacidad_info=$stmt->fetchObject("discapacidad_info");
		return $discapacidad_info;
	}
	
}
?>
