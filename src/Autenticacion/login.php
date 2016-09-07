<?php

  require_once("BD/conex.php");
  require_once("usuar.php");
//require_once("../modelo/cambiocontraseña.php");
  //require_once ('../modelo/validacion.php');
  
   
 class Login{
	 
	 public $con;
  public  $user;
  public static $perfil;
  public $sesion;
  public $verificar=false;
  //$array;
  public function __construct(){
	   $this->con=new Conexion();
     $this->con->conectar();
  }
 public function sesionUsuario(){
	 if(isset($_POST["enviar"])){
		 
	 $this->verificar=true;

	    $usuario=$_POST['usuario'];
	    $password=$_POST['contrasena'];
		global $user;
		
	 
	 $this->user= new Usuario();
         $this->user->setUsuario($usuario);
	     $this->user->setPassword($password);
	 
           $intentos=$this->con->obtenerIntentoUsua($this->user->getUsuario());
         
         
	 if($this->verUsuario()){
        
         if($intentos>=3){
             header("location: ../vista/index.php?mensaje=bloqueo de usuario por intentos de login fallidos ");
            exit();
         }
         $objUsu=$this->con->devolverUsuario($this->user->getUsuario());
         
         
         
         //tomando la fecha del sistema para compararlo con la fecha del ultimo cambio de contraseña del usuario 
         date_default_Timezone_set('America/Bogota');
         $string= date ( "d-m-Y"  );//toma la fecha del sistema
         $today = date_create($string);//creando la fecha con la funcion para luego copararla
         $feccontra = date_create($objUsu[0]->getFec());//creando y tomando la fecha del ultimo cambio de la contraseña
         $interval = date_diff( $feccontra, $today);//comparando las dos fechas
        $dias=$interval->format('%R%a días');//tomando el valor en entero del resto de la comparacion anterior 
         
         if($dias>=30 ){
             header("location: ../modelo/menu.php?mensaje=Tiene que cambiar su contraseña por seguridad");
          exit();}
        
		 
	 $this->con->actualizarIntentosUsu($this->user->getUsuario(),0);
	 $this->con->agregarSesion($this->user->getUsuario(),$this->user->getPassword(),self::$perfil);
		
	 
		     
        return true;

              
		    
			 
         }  else {
               $intentos+=1;
			    $this->con->actualizarIntentosUsu($this->user->getUsuario(),$intentos); 
               if($intentos<3){
            
                 header("location: ../vista/index.php?mensaje=usuario o contraseña incorrecto ");
             
             
             } else {
               header("location: ../vista/index.php?mensaje=bloqueo de usuario por intentos de login fallidos ");
             }
         }
         return false; 
     }
         
         
	 }

  public function verUsuario(){
	  //echo "kjkfj";
	 
	 $ver=false;
  if(!$this->verificar){
	  $array=$this->con->consultarSesion();
	  $this->user=new Usuario();
	$this->user->setUsuario($array[0]);
      $this->user->setPassword($array[1]);
	  self::$perfil=$array[2];
  }
 		
		//echo self::$user->usuario;
		if($this->con->verificarUsuario($this->user->getUsuario(),$this->user->getPassword())==false){
		
			global $ver;
			$ver=false;
			//$con->
			
			
			
			
		}else{
			
			global $ver;
			$ver=true;
            $this->verificar=false;
          session_start();
		  $_SESSION["usuario"]=$this->user->getUsuario();
		self::$perfil= $this->con->verPerfil($this->user->getUsuario());
		
		
  }
  return $ver;
  }
  	function verSesion(){
			global $sesion;
			$sesion= "iniciar cesion";
			$ver=true;
			
			if(!isset($_SESSION["usuario"])){
				$ver=false;
				header("Location:index.php");
				
			}else{
				
				$sesion = "cerrar sesion";
			}
			return $ver;
		}
 }