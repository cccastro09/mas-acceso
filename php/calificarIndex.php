<?php
// Inicializar la sesión.
	session_start();
?>


<?php
ini_set('display_errors', 1);
require '../modelo/colectorcalificar.php';

    $colector= new CalificarCollector();
?>
<!Doctype html>
 <html>
     <head>
         <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         <title>Calificar</title>
     </head>
     <body>
        <table class="datos">
          <?php
          
            foreach ($colector->readAllDemo() as $datos) {
                ?>
                    
                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getCalificacion(); ?> </td>
                       <td> <?php echo $datos->getCOmentario();?> </td>
                       <td><a href="editardemo.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="eliminardemo.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>
          
          <tr>
            <td colspan=4><a href="crearCalificar.php">Crear Calificar</a></td>
            <td colspan=4><a href="../index.php">Salir</a></td>
          </tr>
          
</table>
       
</body>


</html>
