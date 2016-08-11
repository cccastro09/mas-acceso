<?php
ini_set('display_errors', 1);
require 'votoCollector.php';

    $colector= new CollectorVoto();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
        <table class="datos">
          <?php
          
            foreach ($colector->readAllVoto() as $datos) {
                ?>
                    
                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                       <td><a href="editarVoto.php?id=<?php echo $datos->getId();?>"> Editar</a>  </td>
                       <td><a href="borrarVoto.php?id=<?php echo $datos->getId();?>"> Eliminar</a>  </td>
                     </tr>
                   <?php
            }
            ?>
          
          <tr>
            <td colspan=4><a href="crearVoto.html">Crear voto</a></td>
          </tr>
          
</table>
       
</body>


</html>
