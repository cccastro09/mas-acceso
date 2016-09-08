<div>
<?php
      use mas_acceso\edificio\comentario\ComentarioCollector;
      $colector= new ComentarioCollector();
      if(isset($_POST["name"])){

        $comentario = new ComentarioClass();
        $comentario->setContenido($_POST["comment"]);
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

<form action="index.php" method="post" oninput="x.value=parseInt(a.value)">
  <input type="text" placeholder="Nombre" id="name" name="name"><textarea type="text" placeholder="Comentario" id="comment" name="comment"></textarea>
  <button type="submit">Comentar</button>
</form>
<?php
}
?>
</div>
