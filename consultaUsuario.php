<?php
ini_set('display_errors', 1);
require 'usuarioCollector.php';
require 'usuarioClass.php';

    $colector= new usuarioCollector();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
        <table class="datos">
          <?php
          
            foreach ($colector->readAllUsuario() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                      <td> <?php echo $datos->getApellidos(); ?> </td>
					  <td> <?php echo $datos->getNombres(); ?> </td>
					  <td> <?php echo $datos->getUsuario(); ?> </td>
					  <td> <?php echo $datos->getContrasena(); ?> </td>
					  <td> <?php echo $datos->getConfContrasena(); ?> </td>
					  <td> <?php echo $datos->getEmail(); ?> </td>
					  <td> <?php echo $datos->getGenero(); ?> </td>
					  <td> <?php echo $datos->getFechaNacimiento(); ?> </td>
					  <td> <?php echo $datos->getPais(); ?> </td>
					  <td> <?php echo $datos->getTipoDiscapacidad(); ?> </td>
					  <td> <?php echo $datos->getPorcentajeDiscapacidad(); ?> </td>
					  
                     </tr>
                   <?php
            }
        
?>
          
          
</table>
</body>
</html>
