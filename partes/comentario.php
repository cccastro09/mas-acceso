<div>
<?php
      /*require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';*/
      use mas_acceso\edificio\comentario\ComentarioCollector;
      use mas_acceso\edificio\comentario\ComentarioClass;
      $colector= new ComentarioCollector();
      if(isset($_POST["coment"])){

        $comentario = new ComentarioClass();
        $comentario->setContenido($_POST["coment"]);
        $comentario->setIdEdificio(2); //llamar a edificio de guillermo
        $comentario->setIdUsuario(3); //llamar a usuario de Claudia

            if($colector->addComentario($comentario)){
                // refrescar a la pagina actual
                /*header("Refresh:0; url=***");*/
              }else{
                  echo "Hubo un error al intentar agregar el comentario2.";
              }

      }
      else{

      foreach ($colector->readAllComentario() as $datos) {
?>

<div class="col-xs-12">
  <?php /*echo usuario->getNombre()*/ echo $datos->getContenido(); ?>
</div>

<?php
  }
?>

<form action="comentario.php" method="post" oninput="x.value=parseInt(a.value)">
  <textarea type="text" placeholder="Comentario" id="comment" name="coment"></textarea>
  <button type="submit">Comentar</button>
</form>
<?php
}
?>
</div>
