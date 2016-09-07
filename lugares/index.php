<?php require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
use mas_acceso\edificio\EdificioCollector;
use mas_acceso\edificio\EdificioClass;
use mas_acceso\edificio\reporte\ReporteCollector;
use mas_acceso\edificio\reporte\ReporteClass;
use mas_acceso\util\Functions as FNC;
    ?>
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="copyright" content="+Acceso"> <!--Nombre de la compañia-->
    <meta name="organization" content="+Acceso" /> <!--Nombre de la Organizacion-->
    <meta name="generator" content="Notepad++"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
    <meta name="name" content="Edificio">
    <meta name="description" content="Visualiza la informacion de las infraestructuras enlazadas a nuestro sitio">
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

    <link rel="stylesheet" href="/css/tema.min.css">
    <link rel="stylesheet" href="/css/estilos.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/partes/menu.php'; ?>
  <div class="container-fluid">
    <div class="row">
    <?php
    $col = new EdificioCollector();
    $colr = new ReporteCollector();
    foreach (($col->getAllEdificios()) as $e) {
        $r = $e->getReporte($colr);
        $d = $r? FNC::strToDate($r->getFecha()): false;
    ?>

<div class="col-sm-6 col-md-4 col-lg-3">
  <div class="example-2 card">
    <div class="wrapper">
      <div class="header">
        <div class="date">
          <span class="day"><?php echo $d ? $d->format("j"): ""; ?></span>
          <span class="month"><?php echo $d ? $d->format("M"): ""; ?></span>
          <span class="year"><?php echo $d ? $d->format("Y"): ""; ?></span>
        </div>
        <h2 class="menu-content">
            <?php
            echo $r ? $r->getCalificacion() : ""; ?>
        </h2>
      </div>
      <div class="data">
        <div class="content">
          <span class="author">Categoria</span>
          <h1 class="title"><a href="/lugar/?<?php echo $e->getID(); ?>"><?php echo $e->getNombre(); ?></a></h1>
          <p class="text"><?php echo $e->getDescripcion(); ?></p>
          <a href="/lugar/?<?php echo $e->getID(); ?>" class="button">ver lugar</a>
        </div>
      </div>
    </div>
  </div>
      </div>
            <?php
    }; ?>

    </div>

</html>
