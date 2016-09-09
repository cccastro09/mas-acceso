<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\edificio\reporte\ReporteCollector;
use mas_acceso\edificio\reporte\ReporteDetalladoClass;

    $coll = new ReporteCollector();
if (isset($_GET["r_id"])) {
    echo $_GET["r_id"];
    $obj = $coll->getReporteDetallado($_GET["r_id"]);
    if (!$obj) {
          header("Location: /admin/reportes/");
          exit();
    }
    var_dump($obj);
    ?>
    <html lang='es'>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="copyright" content="+Acceso"> <!--Nombre de la compañia-->
        <meta name="organization" content="+Acceso" /> <!--Nombre de la Organizacion-->
        <meta name="generator" content="Notepad++"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
        <meta name="name" content="Admin - Lugares">
        <meta name="description" content="Pagina de inicio de administración de lugares.">
        <meta name="author" content="Guillermo Bernal">
        <!-- http://getbootstrap.com/css/#overview-mobile -->
        <meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=no'>
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <title>+Acceso</title>
        <!-- http://getbootstrap.com/getting-started/ -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <link rel="stylesheet" href="/admin/css/sb-admin.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </head>

    <body>

          <div id="wrapper">

            <?php include $_SERVER['DOCUMENT_ROOT'].'/admin/partes/menu.php'; ?>

              <div id="page-wrapper">
                  <div class="container-fluid">


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <input type="hidden" name="id" value="<?php echo $obj->getId(); ?>">
      <input type="hidden" name="idedificio" value="<?php echo $obj->getEdificioID(); ?>">
        <div class="form-group">
          <label for="descr">Rampas</label>
          <select class="form-control" name="rampas">
            <option<?php echo $obj->getRampas() == 1 ? ' selected="selected"' : '';?>>1</option>
            <option<?php echo $obj->getRampas() == 2 ? ' selected="selected"' : '';?>>2</option>
            <option<?php echo $obj->getRampas() == 3 ? ' selected="selected"' : '';?>>3</option>
            <option<?php echo $obj->getRampas() == 4 ? ' selected="selected"' : '';?>>4</option>
            <option<?php echo $obj->getRampas() == 5 ? ' selected="selected"' : '';?>>5</option>
          </select>
        </div>
          <div class="form-group">
            <label for="descr">Ascensores</label>
            <select class="form-control" name="ascensores">
              <option<?php echo $obj->getAscensores() == 1 ? ' selected="selected"' : '';?>>1</option>
              <option<?php echo $obj->getAscensores() == 2 ? ' selected="selected"' : '';?>>2</option>
              <option<?php echo $obj->getAscensores() == 3 ? ' selected="selected"' : '';?>>3</option>
              <option<?php echo $obj->getAscensores() == 4 ? ' selected="selected"' : '';?>>4</option>
              <option<?php echo $obj->getAscensores() == 5 ? ' selected="selected"' : '';?>>5</option>
            </select>
          </div>
            <div class="form-group">
              <label for="descr">Pasamanos</label>
              <select class="form-control" name="pasamanos">
                <option<?php echo $obj->getPasamanos() == 1 ? ' selected="selected"' : '';?>>1</option>
                <option<?php echo $obj->getPasamanos() == 2 ? ' selected="selected"' : '';?>>2</option>
                <option<?php echo $obj->getPasamanos() == 3 ? ' selected="selected"' : '';?>>3</option>
                <option<?php echo $obj->getPasamanos() == 4 ? ' selected="selected"' : '';?>>4</option>
                <option<?php echo $obj->getPasamanos() == 5 ? ' selected="selected"' : '';?>>5</option>
              </select>
            </div>
              <div class="form-group">
                <label for="descr">Pasillos</label>
                <select class="form-control" name="pasillos">
                  <option<?php echo $obj->getPasillos() == 1 ? ' selected="selected"' : '';?>>1</option>
                  <option<?php echo $obj->getPasillos() == 2 ? ' selected="selected"' : '';?>>2</option>
                  <option<?php echo $obj->getPasillos() == 3 ? ' selected="selected"' : '';?>>3</option>
                  <option<?php echo $obj->getPasillos() == 4 ? ' selected="selected"' : '';?>>4</option>
                  <option<?php echo $obj->getPasillos() == 5 ? ' selected="selected"' : '';?>>5</option>
                </select>
              </div>
                <div class="form-group">
                  <label for="descr">Baños</label>
                  <select class="form-control" name="banos">
                    <option<?php echo $obj->getBanos() == 1 ? ' selected="selected"' : '';?>>1</option>
                    <option<?php echo $obj->getBanos() == 2 ? ' selected="selected"' : '';?>>2</option>
                    <option<?php echo $obj->getBanos() == 3 ? ' selected="selected"' : '';?>>3</option>
                    <option<?php echo $obj->getBanos() == 4 ? ' selected="selected"' : '';?>>4</option>
                    <option<?php echo $obj->getBanos() == 5 ? ' selected="selected"' : '';?>>5</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="descr">Entradas/Salidas</label>
                    <select class="form-control" name="eys">
                      <option<?php echo $obj->getEntradasSalidas() == 1 ? ' selected="selected"' : '';?>>1</option>
                      <option<?php echo $obj->getEntradasSalidas() == 2 ? ' selected="selected"' : '';?>>2</option>
                      <option<?php echo $obj->getEntradasSalidas() == 3 ? ' selected="selected"' : '';?>>3</option>
                      <option<?php echo $obj->getEntradasSalidas() == 4 ? ' selected="selected"' : '';?>>4</option>
                      <option<?php echo $obj->getEntradasSalidas() == 5 ? ' selected="selected"' : '';?>>5</option>
                    </select>
                  </div>
        <button type="submit" class="btn btn-default">Actualizar</button>
    </form>

                  </div>
                  <!-- /.container-fluid -->

              </div>
              <!-- /#page-wrapper -->

          </div>
          <!-- /#wrapper -->


    </html>
    <?php
} elseif (isset($_POST["id"]) && isset($_POST["idedificio"])) {
    $obj = new ReporteDetalladoClass();
    $obj->setId($_POST["id"]);
    $obj->setEdificioID($_POST["idedificio"]);
    $obj->setRampas($_POST["rampas"]);
    $obj->setAscensores($_POST["ascensores"]);
    $obj->setPasamanos($_POST["pasamanos"]);
    $obj->setPasillos($_POST["pasillos"]);
    $obj->setBanos($_POST["banos"]);
    $obj->setEntradasSalidas($_POST["eys"]);
    $obj->setCalificacion();
    if ($coll->updateReporteDetallado($obj)) {
        //var_dump($obj);
        header("Location: /admin/reportes/");
        exit();
    } else {
        echo "Hubo un error al intentar actualizar el Becario.";
    }
} else {
    header("Location: /admin/reportes/");
    exit();
}
