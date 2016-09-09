<div>
<?php
      /*require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';*/
      use mas_acceso\edificio\comentario\ComentarioCollector;
      use mas_acceso\edificio\comentario\ComentarioClass;

      $colector= new ComentarioCollector();
if (isset($_POST["coment"])) {
    $comentario = new ComentarioClass();
    $comentario->setContenido($_POST["coment"]);
    $comentario->setIdEdificio($_GET["e_id"]); //llamar a edificio de guillermo
    $comentario->setIdUsuario($usuario->getId()); //llamar a usuario de Claudia

    if ($colector->addComentario($comentario)) {
        // refrescar a la pagina actual
        /*header("Location: /src/Edificio");*/
    } else {
        echo "Hubo un error al intentar agregar el comentario2.";
    }
} else {
    if ($usuario) {
    foreach (($colector->readAllComentarioByEdificio($_GET["e_id"])) as $datos) {
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
else {
  echo "Para comentar debe ser usuario";
}
}
?>
</div>
