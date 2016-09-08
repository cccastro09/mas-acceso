<?php require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
//aquí pueden ir agregando sus colectores usando

if (!isset($_GET["e_id"])) {
    header("Location: /lugares/");
    exit();
}
use mas_acceso\edificio\EdificioClass;
use mas_acceso\edificio\EdificioCollector;
use mas_acceso\edificio\categoria\CollectorCategoria;

 //por ejemplo.
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
    <?php include $_SERVER['DOCUMENT_ROOT'].'/partes/menu.php';
      $col = new EdificioCollector();
      $e = $col->getEdificio($_GET["e_id"]);
    if (!$e) {
        header("Location: /lugares/");
        exit();
    }
      $ccol = new CollectorCategoria();
    ?>
  <div class="container-fluid">
    <div class="row">
                <div class="col col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/lugares/">Lugares</a></li>
                        <li class="active"><?php echo $e->getNombre(); ?></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col col-sm-12">
                    <header class="cabecera-edificio">
                        <img src="img/header.png" class="imagen-cabecera" alt="">
                        <h1><?php echo $e->getNombre(); ?></h1>
                    </header>
    <h2>Categoría</h2><h4><?php echo $ccol->getCategoria($e->getCategoriaID()); ?></h4>
    <p><?php echo $e->getDescripcion(); ?></p>
                </div>
            </div>

    </div>

</html>
