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
      ?>
      <div><?php echo $colector->getPromedioByEdificio($_GET["e_id"]) ?></div>

      <?php
        } else {
          ?>
          <div><?php echo $colector->getPromedioByEdificio($_GET["e_id"]) ?></div>

          <?php
        echo "Hubo un error al intentar agregar el voto.";
    }
} else {
  if ($usuario) {
?>
<div><?php echo $colector->getPromedioByEdificio($_GET["e_id"]) ?></div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?e_id=<?php echo $_GET["e_id"]; ?>" oninput="x.value=parseInt(a.value)" method="post">
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
  ?>
  <div><?php echo $colector->getPromedioByEdificio($_GET["e_id"]) ?></div>

  <?php
  echo "Para votar debe ser usuario";
}
}
?>
