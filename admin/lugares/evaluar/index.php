<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';


use mas_acceso\edificio\reporte\ReporteCollector;
use mas_acceso\edificio\reporte\ReporteDetalladoClass;
use mas_acceso\edificio\EdificioCollector;

if (isset($_GET["e_id"]) && isset($_POST["eys"])) {
    $vCollector = new ReporteCollector();
    $ce = new EdificioCollector();
    $e = $ce->getEdificio($_GET["e_id"]);
    $obj = new ReporteDetalladoClass();
        $obj->setEdificioID($_GET["e_id"]);
        $obj->setRampas($_POST["rampas"]);
        $obj->setAscensores($_POST["ascensores"]);
        $obj->setPasamanos($_POST["pasamanos"]);
        $obj->setPasillos($_POST["pasillos"]);
        $obj->setBanos($_POST["banos"]);
        $obj->setEntradasSalidas($_POST["eys"]);
        $obj->setCalificacion();
        $oobj = $vCollector->getReporteDetallado($vCollector->addReporte($obj));
    if ($oobj) {
        $e->setReporte($oobj);
        if ($ce->updateEdificio($e)) {
            var_dump($oobj);
            var_dump($e);
            //header("Location: /admin/lugares/");
            //exit();
        }
    }
        echo "Hubo un error al intentar agregar el Reporte.";
} else {
?>
<!DOCTYPE html>
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



                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?e_id=".$_GET["e_id"]; ?>" method="post">
                          <div class="form-group">
                          <label for="descr">Rampas</label>
                          <select class="form-control" name="rampas">
                            <option  >1</option>
                            <option  >2</option>
                            <option  >3</option>
                            <option  >4</option>
                            <option  >5</option>
                          </select>
                        </div>
                          <div class="form-group">
                            <label for="descr">Ascensores</label>
                            <select class="form-control" name="ascensores">
                              <option  >1</option>
                              <option  >2</option>
                              <option  >3</option>
                              <option  >4</option>
                              <option  >5</option>
                            </select>
                          </div>
                            <div class="form-group">
                              <label for="descr">Pasamanos</label>
                              <select class="form-control" name="pasamanos">
                                <option  >1</option>
                                <option  >2</option>
                                <option  >3</option>
                                <option  >4</option>
                                <option  >5</option>
                              </select>
                            </div>
                              <div class="form-group">
                                <label for="descr">Pasillos</label>
                                <select class="form-control" name="pasillos">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                                <div class="form-group">
                                  <label for="descr">Baños</label>
                                  <select class="form-control" name="banos">
                                    <option >1</option>
                                    <option >2</option>
                                    <option >3</option>
                                    <option >4</option>
                                    <option >5</option>
                                  </select>
                                </div>
                                  <div class="form-group">
                                    <label for="descr">Entradas/Salidas</label>
                                    <select class="form-control" name="eys">
                                      <option >1</option>
                                      <option >2</option>
                                      <option >3</option>
                                      <option >4</option>
                                      <option >5</option>
                                    </select>
                                  </div>
                        <button type="submit" class="btn btn-default">Agregar</button>
                    </form>


              </div>
              <!-- /.container-fluid -->

          </div>
          <!-- /#page-wrapper -->

      </div>
      <!-- /#wrapper -->


</html>
<?php
}
