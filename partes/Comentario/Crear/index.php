<?php
require 'ComentarioCollector.php';


if(isset($_POST["name"])){

  $vCollector = new CollectorComentario();
  $comentario = new ComentarioClass();
  $comentario->setContenido($_POST["comment"]);
  $comentario->setIdEdificio(2);
  $comentario->setIdUsuario(3);
  
      if($vCollector->addComentario($comentario)){
          //var_dump($obj);
          
          echo "Registro creado con éxito, <a href='../indexEdificio.php'>Volver atrás</a> ";
          /*header("Refresh:0; url=localhost/proyectoLocal/modelo/indexEdificio.php");*/
        }else{
            echo "Hubo un error al intentar agregar el becario2.";
        }
    
}
else{
    echo "No se ha ingresado ningun comentario";
}
