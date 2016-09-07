<?php

require_once 'src/autoload';
use mas_acceso\edificio\VotoCollector;

if(isset($_POST["a"])){

  $voCollector = new CollectorVoto();
  $voto = new VotoClass();
  $voto->setValoracion($_POST["a"]);
  $voto->setIdEdificio(2);
  $voto->setIdUsuario(2);

      if($voCollector->addVoto($voto)){
          //var_dump($obj);

          echo "Registro creado con éxito, <a href='becarioindex.php'>Volver atrás</a> ";
          /*header("Refresh:0; url=localhost/proyectoLocal/modelo/indexEdificio.php");*/
        }else{
            echo "Hubo un error al intentar agregar el becario2.";
        }

}
else{
    echo "No se ha ingresado ningun comentario";
}
