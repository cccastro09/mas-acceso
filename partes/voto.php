<div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
use mas_acceso\edificio\voto\VotoCollector;
use mas_acceso\edificio\voto\VotoClass;

$colector= new VotoCollector();
if (isset($_POST["a"])) {

    $voto = new VotoClass();
    $voto->setValoracion($_POST["a"]);
    $voto->setIdEdificio($_GET["e_id"]); //solicitar de Edificio Guillermo
    $voto->setIdUsuario($usuario->getId()); //solicitar de Usuario Claudia

    if ($colector->addVoto($voto)) {
        /*header("Refresh:0; url=localhost/proyectoLocal/modelo/indexEdificio.php");*/
    } else {
        echo "Hubo un error al intentar agregar el voto.";
    }
} else {
  if ($usuario) {
?>
<div><?php echo $colector->getPromedioByEdificio(2) ?></div>
<form action="voto.php" oninput="x.value=parseInt(a.value)" method="post">
<div style="margin-left:0;">
  0<input type="range" id="a" name="a" value="50">100
  <br>
  <output name="x" for="a"></output>
</div>
<button type="submit">Votar</button>
</form>

    <?php
}
else {
  echo "Para votar debe ser usuario";
}
}
?>
