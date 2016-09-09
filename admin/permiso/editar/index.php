<?php
require_once "../../../src/autoload.php";
use mas_acceso\usuario\Permiso\ColectorPermiso;
use mas_acceso\usuario\Permiso\PermisoClass;
  $col= new ColectorPermiso();
if(isset($_GET["id"])){

$obj = $col->getPermiso($_GET["id"]);


?>
<html lang='es'>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="copyright" content="+Acceso">
        <!--Nombre de la compañia-->
        <meta name="organization" content="+Acceso"/>
        <!--Nombre de la Organizacion-->
        <meta name="generator" content="Notepad++">
        <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
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
                      //aqui
                        <input type="hidden" name="id" value="<?php echo $obj->getId(); ?>">
                        <div class="form-group">
                            <label for="nombre">Descripcion</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $obj->getDescripcion(); ?>" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="descr">Constante</label>
                            <input type="text" class='form-control' placeholder='constante' name="constante" id="constante" rows="6"><?php echo $obj->getConstante(); ?></input>
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
} elseif (isset($_POST["id"]) && isset($_POST["nombre"])) {
    $obj = new PermisoClass();
    $obj->setId($_POST["id"]);
    $obj->setConstante($_POST["constante"]);
    $obj->setDescripcion($_POST["nombre"]);
    if ($col->updatePermiso($obj)) {
        //var_dump($obj);
        header("Location: /admin/permiso/");
        exit();
    } else {
        echo "Hubo un error al intentar actualizar el persmiso.";
    }
} else {
    header("Location: /admin/permiso/");
    exit();
}
