<?php
use mas_acceso\edificio\voto\VotoCollector;
$colector= new VotoCollector();
if(isset($_POST["a"])){

  $voto = new VotoClass();
  $voto->setValoracion($_POST["a"]);
  $voto->setIdEdificio(2); //solicitar de Edificio Guillermo
  $voto->setIdUsuario(2); //solicitar de Usuario Claudia

      if($colector->addVoto($voto)){
          /*header("Refresh:0; url=localhost/proyectoLocal/modelo/indexEdificio.php");*/
        }else{
            echo "Hubo un error al intentar agregar el voto.";
        }

}
else {
?>
<form action="index.php">
<div style="width: 50%; text-align: center; margin: auto;">
  0<input type="range" id="a" name="a" value="50">100
  <output name="x" for="a"></output>
</div>
<button type="submit">Votar</button>
</form>

  <?php
}
?>