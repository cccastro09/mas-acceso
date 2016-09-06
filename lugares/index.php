<?php require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
use mas_acceso\edificio\EdificioCollector;
use mas_aceso\edificio\EdificioClass;
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
<div class="col-sm-12 col-md-3">
    <?php
    $col = new EdificioCollector();

    foreach (($col->getAllEdificios()) as $e) {
    ?>
            <div class="resultados">
                <p>

                </p>
                <a href="/lugar/?<?php echo $e->getID(); ?>" class="edificio-lista">
                    <div>
                        <h4><?php echo $e->getNombre(); ?></h4>
                        <p>
                            Universidad/Facultad
                        </p>
                        <h3>
                  8.5
                </h3>
                        <div class="clearfix">

                        </div>
                    </div>
                </a>
            </div>
            <?php                                                                                                         }; ?>
        </div>
        <div class="col-sm-12 col-md-9">
            <div class="mapa cuerpo" id="map">

            </div>
        </div>
    </div>
</div>
<script>
  var map;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -2.14629, lng: -79.9547},
      zoom: 8
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC88qkAYGuOHrBGdi0345L6XZQtnLngE9Y&callback=initMap"
async defer></script>

    </div>

</html>
