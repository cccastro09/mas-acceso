<?php
ini_set('display_errors', 1);
require 'demoCollector.php';

    $colector= new CollectorDemo();
?>
<!Doctype html>
 <html>
     <head>
     </head>
     <body>
        <table class="datos">
          <?php
          
            foreach ($colector->readAllDemo() as $datos) {
                ?>

                     <tr>
                      <td> <?php echo $datos->getId(); ?> </td>
                       <td> <?php echo $datos->getNombre(); ?> </td>
                     </tr>
                   <?php
            }
          $demo = new Demo();
          $demo->setId(3);
          $demo->setNombre("N");
          if($colector->addDemo($demo))
          echo "yeah";
          else
            echo "nope...";
?>
          
          
</table>
</body>


</html>
