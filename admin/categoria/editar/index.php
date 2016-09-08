<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Crear-Categoria</title>
</head>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
use mas_acceso\edificio\categoria\CategoriaCollector;
use mas_acceso\edificio\categoria\CategoriaClass;
if(isset($_POST["nombre"])){
  $vCollector = new CategoriaCollector();
  $programa = new programa();
  $programa->setNombre($_POST["nombre"]);
    $programa->setDescripcion($_POST["descripcion"]);

      if($vCollector->addCategoria($categoria)){
          //var_dump($obj);
          echo "Registro creado con éxito, <a href='../index.php'>Volver atrás</a> ";
        }else{
            echo "Hubo un error al intentar agregar la categoria.";
        }
}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form action="index.php" method="post">
      <div>
        <label for="name">Crear nuevo programa </label>
        <input type="text" name="nombre" value="Categoria ..."><br>
      </div>
	<div>
        <input type="text" name="descripcion" value=""><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }
