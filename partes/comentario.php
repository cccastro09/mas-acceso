<div>
<?php
      /*require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';*/
      use mas_acceso\edificio\comentario\ComentarioCollector;
      use mas_acceso\edificio\comentario\ComentarioClass;
      $colector= new ComentarioCollector();
      if(isset($_POST["coment"])){

        $comentario = new ComentarioClass();
        $comentario->setContenido($_POST["coment"]);
        $comentario->setIdEdificio($_GET["e_id"]); //llamar a edificio de guillermo
        $comentario->setIdUsuario(3); //llamar a usuario de Claudia

      $colector= new ComentarioCollector();
if (isset($_POST["coment"])) {
    $comentario = new ComentarioClass();
    $comentario->setContenido($_POST["coment"]);
    $comentario->setIdEdificio(2); //llamar a edificio de guillermo
    $comentario->setIdUsuario(3); //llamar a usuario de Claudia

      foreach ($colector->readAllComentarioByEdificio($_GET["e_id"]) as $datos) {
?>

<div class="col-xs-12">
    <?php /*echo usuario->getNombre()*/ echo $datos->getContenido(); ?>
</div>

<?php
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?e_id=<?php echo $_GET["e_id"]; ?>" method="post" oninput="x.value=parseInt(a.value)">
<textarea type="text" placeholder="Comentario" id="comment" name="coment"></textarea>
<button type="submit">Comentar</button>
</form>
<?php
}
?>
</div>
