<?php
  namespace mas_acceso\usuario;

  use mas_acceso\util\Collector;
  use mas_acceso\usuario\UsuarioClass;
  use mas_acceso\usuario\UsuarioInfoClass;
  use mas_acceso\usuario\rol\RolClass;
  use mas_acceso\usuario\rol\ColectorRol;
  use mas_acceso\Usuario\Discapacidades\DiscapacidadClass;

class usuarioColector extends Collector
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * [Función que se encarga de realizar el ingreso de los datos de usuario(usuario, password) a la base de datos]
     * @param  [clase] $usuario [contiene los campos usuario y password]
     * @return [objeto]          [con los campos usuario y password]
     */
    public function insertarUsuario($UsuarioClass)
    {
        try {
            self::execQuery("INSERT INTO usuario (u_usuario, u_password) VALUES ('".$UsuarioClass->getUsuario()."','".$UsuarioClass->getPassword()."') ");

            $stmt = $this->con->prepare("SELECT * FROM usuario ORDER BY u_id DESC limit 1");
            $stmt->execute();
            $UsuarioClass = $stmt->fetchObject(UsuarioClass::class);
            return $UsuarioClass;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * [Función que se encarga de realizar el ingreso de los datos personales de usuario a la base de datos]
     * @param  [clase] $usuario_info [contiene los campos usuario y password]
     * @return [boolean]          [Estado exitoso al realizar el ingreso]
     */
    public function insertarUsuarioInfo($UsuarioInfoClass)
    {
        try {
            self::execQuery("INSERT INTO usuario_info (u_nombre, u_apellidos, u_mail, u_sexo, u_fecha_nacimiento, u_pais, u_tipo_discapacidad, u_porcentajediscapacidad, u_role, u_usuario) VALUES ('".$UsuarioInfoClass->getNombre()."','".$UsuarioInfoClass->getApellidos()."','".$UsuarioInfoClass->getMail()."','".$UsuarioInfoClass->getSexo()."','".$UsuarioInfoClass->getFecha_nacimiento()."','".$UsuarioInfoClass->getPais()."',".$UsuarioInfoClass->getTipodiscapacidad().",'".$UsuarioInfoClass->getPorcentajediscapacidad()."',".$UsuarioInfoClass->getRole().",".$UsuarioInfoClass->getUsuario().") ");
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function consultarUsuario()
    {
        return self::read('usuario', UsuarioClass::class);
    }
/**
 * [Función que realiza una consulta a la base de datos obteniendo los datos]
 * @param  [string] $id [id del usuario]
 * @return [objeto]     [todos los datos de usuario]
 */
    public function consultarUsuarioPorId($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM usuario WHERE u_id=:id");
        $stmt->execute(array(":id"=>$id));
        $UsuarioClass=$stmt->fetchObject(UsuarioClass::class);
        return $UsuarioClass;
    }

/**
 * [Realiza una consulta de toda la informacion personal del usuario]
 * @param  [string] $id [id de usuario]
 * @return [objeto]     [todos los datos informativos del usuario]
 */
    public function consultarUsuarioInfoPorIdUsuario($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM usuario_info WHERE u_usuario=:id");
        $stmt->execute(array(":id"=>$id));
        $usuario_info=$stmt->fetchObject(UsuarioInfoClass::class);

        //echo "nombre:".$usuario_info->getNombre();

        return $usuario_info;
    }

/**
 * [Actualiza los dates de autenticacion del usuario]
 * @param  [Objeto] $usuario [datos de usuario]
 * @return [boolean]          [Estado exitoso al realizar las actualizacion de los datos]
 */
    public function updateUsuario($UsuarioClass)
    {
      //echo $UsuarioClass->getId();
        try {
          //echo $UsuarioClass->getId();
            self::execQuery("UPDATE usuario SET u_usuario='".$UsuarioClass->getUsuario()."',u_password='".$UsuarioClass->getPassword()."',u_token='".$UsuarioClass->getToken()."' WHERE u_id=".$UsuarioClass->getId());
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function updateUser($UsuarioClass)
    {
      //echo $UsuarioClass->getId();
        try {
          //echo $UsuarioClass->getId();
            self::execQuery("UPDATE usuario SET u_usuario='".$UsuarioClass->getUsuario()."',u_password='".$UsuarioClass->getPassword()."' WHERE u_id=".$UsuarioClass->getId());
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


/**
 * [Funcion que actualiza los datos informativos del usuario en la base de datos]
 * @param  [objeto] $usuario_info [todos los datos informativos del usuario]
 * @return [boolean]               [Un estado exitoso cuando los datos se han actualizado de manera correcta]
 */
    public function updateUsuarioInfo($UsuarioInfoClass)
    {
        try {
            self::execQuery("UPDATE usuario_info SET u_nombre='".$UsuarioInfoClass->getNombre()."',u_apellidos='".$UsuarioInfoClass->getApellidos()."',u_mail='".$UsuarioInfoClass->getMail()."',u_sexo='".$UsuarioInfoClass->getSexo()."',u_fecha_nacimiento='".$UsuarioInfoClass->getFecha_nacimiento()."',u_pais='".$UsuarioInfoClass->getPais()."',u_tipo_discapacidad=".$UsuarioInfoClass->getTipodiscapacidad().",u_porcentajediscapacidad='".$UsuarioInfoClass->getPorcentajediscapacidad()."',u_role=".$UsuarioInfoClass->getRole()." WHERE u_usuario=".$UsuarioInfoClass->getUsuario());
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function delete($id)
    {
        try {
            self::execQuery("DELETE FROM usuario_info WHERE u_usuario=".$id);
            self::execQuery("DELETE FROM voto WHERE v_id_usuario=".$id);
            self::execQuery("DELETE FROM comentario WHERE c_id_usuario=".$id);
            self::execQuery("DELETE FROM usuario WHERE u_id=".$id);

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function deleteUsuario($id)
    {
        try {
            self::execQuery("DELETE FROM usuario WHERE u_id=".$id);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function deleteUsuarioInfo($id)
    {
        try {
            self::execQuery("DELETE FROM usuario_info WHERE u_usuario=".$id);
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function consultarRol()
    {
        return self::read('rol', RolClass::class);
    }

    public function consultarRolePorId($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM rol WHERE r_id=:id");
        $stmt->execute(array(":id"=>$id));
        $role=$stmt->fetchObject(RolClass::class);
        return $role;
    }

    public function consultarDiscapacidadInfo()
    {
        return self::read('discapacidad_info', DiscapacidadClass::class);
    }

    public function consultarDiscapacidadInfoPorId($id)
    {
        $stmt = $this->con->prepare("SELECT * FROM discapacidad_info WHERE d_id=:id");
        $stmt->execute(array(":id"=>$id));
        $discapacidad_info=$stmt->fetchObject(DiscapacidadClass::class);
        return $discapacidad_info;
    }

    public function consultarUsuarioPorUsuarioPassword($usuario, $password)
	{
    try{
      $stmt = $this->con->prepare("SELECT * FROM usuario WHERE u_usuario=:usuario AND u_password=:password");
      $stmt->execute(array(":usuario"=>$usuario, ":password"=>$password ));
      $usuario=$stmt->fetchObject(UsuarioClass::class);

      return $usuario;
    }
    catch(PDOException $e)
    {
     return false;
    }
  }

  public function getByToken($token)
  {
      $stmt = $this->con->prepare("SELECT * FROM usuario WHERE u_token=:token");
      $stmt->execute(array(":token"=>$token));
      $usuario=$stmt->fetchObject(UsuarioClass::class);
      $id = $usuario->getId();
      $stmt = $this->con->prepare("SELECT * FROM usuario_info WHERE u_usuario=:usuario");
      $stmt->execute(array(":usuario"=>$id));
      $usuario_info=$stmt->fetchObject(UsuarioInfoClass::class);
      return $usuario_info;
    }

}
