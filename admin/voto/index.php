<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
use mas_acceso\edificio\voto\VotoCollector;
use mas_acceso\edificio\voto\VotoClass;
$colector= new VotoCollector();
?>
<!Doctype html>
 <html>
     <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         <title>VOTO</title>
     </head>
     <body>
        <table class="datos">
          <?php

            foreach ($colector->readAllVoto() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getValoracion(); ?> </td>
                       <td> <?php echo $datos->getIdEdificio(); ?> </td>
                       <td> <?php echo $datos->getIdUsuario(); ?> </td>
                       <td><a href="borrar/index.php.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>

          <tr>
            <td colspan=4><a href="#">Salir</a></td>
          </tr>

</table>

</body>


</html>
