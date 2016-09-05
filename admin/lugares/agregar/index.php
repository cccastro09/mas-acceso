<?php
use mas_acceso\edificio\EdificioCollector;
use mas_aceso\edificio\EdificioClass;

if (isset($_POST["nombre"])) {
    $vCollector = new EdificioCollector();
    $EdificioClass = new EdificioClass();
    $EdificioClass->setId(123);
    $EdificioClass->setNombre($_POST["nombre"]);
    $EdificioClass->setPrograma($_POST["programa"]);
    if ($vCollector->addBecario($EdificioClass)) {
        //var_dump($obj);
        header("Location: https://leccion-php.herokuapp.com/admin/EdificioClass");
        exit();
    } else {
        echo "Hubo un error al intentar agregar el Becario.";
    }
} else {
?>
  <html>

  <head>
  </head>

  <body>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
      <div>
        <label for="name">Crear nuevo EdificioClass </label>
        <input type="text" name="nombre" value="Mickey" placeholder="nombre"><br>
        <input type="number" name="programa" value=1 placeholder="programa"><br>
      </div>
      <div class="button">
        <button type="submit">Crear</button>
      </div>
    </form>
  </body>

  </html>
<?php
}
