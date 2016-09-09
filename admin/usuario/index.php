<?php
session_start();
//ini_set('display_errors', 1);
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

//include_once("Modelo/usuarioColector.php");
use mas_acceso\usuario\usuarioColector;
use mas_acceso\usuario\UsuarioClass;
use mas_acceso\usuario\UsuarioInfoClass;
use mas_acceso\usuario\Rol\ColectorRol;
use mas_acceso\usuario\Rol\RolClass;
use mas_acceso\Usuario\Discapacidades\CollectorDiscapacidad;
use mas_acceso\Usuario\Discapacidades\DiscapacidadClass;


	$UsuarioObj = new usuarioColector();
	$usuario = new UsuarioClass();
	$usuario_info = new UsuarioInfoClass();
	$rol = new RolClass();
	$objRol = new ColectorRol;
	$discapacidadInfo = new DiscapacidadClass();
	$objDiscapacidad = new CollectorDiscapacidad();

?>
<!Doctype html>
 <html>
     <head>
	  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
	rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="/css/tema.min.css">
 <link rel="stylesheet" href="/css/login.css">
     </head>
     <body>
	 <body class="fondo" id="page-top">
	 <a href="login.html">+ACCESO</a>
	 <div class="container">
        <table>
          <?php

            foreach ($UsuarioObj->consultarUsuario() as $c) {
                ?>

                     <tr>
                      <td class="celda"> <?php echo $c->getId(); ?> </td>
                       <td class="celda"> <?php echo $c->getUsuario(); ?> </td>
					   <td class="celda"> <?php echo $c->getPassword(); ?> </td>

					   <?php
						$usuario_info = $UsuarioObj->consultarUsuarioInfoPorIdUsuario($c->getId());

						?>

					   <td class="celda"> <?php echo $usuario_info->getNombre(); ?> </td>
					   <td class="celda"> <?php echo $usuario_info->getApellidos(); ?> </td>
					   <td class="celda"> <?php echo $usuario_info->getMail(); ?> </td>
					   <td class="celda"> <?php echo $usuario_info->getSexo(); ?> </td>
					   <td class="celda"> <?php echo $usuario_info->getFecha_nacimiento(); ?> </td>
					   <td class="celda"> <?php echo $usuario_info->getPais(); ?> </td>

						 <?php
					$discapacidadInfo = $UsuarioObj->consultarDiscapacidadInfoPorId($usuario_info->getTipodiscapacidad());
					?>
					 <td class="celda"> <?php echo $discapacidadInfo->getD_tipo(); ?> </td>

					 <td class="celda"> <?php echo $usuario_info->getPorcentajediscapacidad(); ?> </td>

					 <?php
					$rol = $UsuarioObj->consultarRolePorId($usuario_info->getRole());
					?>
					 <td class="celda"> <?php echo $rol->getNombre(); ?> </td>

                       <td><a class="link" href="/admin/usuario/editar/?id=<?php echo $c->getId();?>"> Editar</a>  </td>
                       <td><a class="link" href="/admin/usuario/borrar/?id=<?php echo $c->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=14><a class="link" href="/admin/usuario/crear/">Crear Usuario</a></td>
          </tr>

</table>
</div>

</body>


</html>
