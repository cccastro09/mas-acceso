<?php require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';
use mas_acceso\Usuario\Discapacidades\DiscapacidadClass;
use mas_acceso\Usuario\Discapacidades\CollectorDiscapacidad;

 $coll = new CollectorDiscapacidad();
if (isset($_GET["d_id"])) {
    $obj = $coll->getDiscapacidades($_GET["d_id"]);
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
        <meta name="name" content="Admin - Discapacidad">
        <meta name="description" content="Pagina de inicio de administración de Discapacidad.">
        <meta name="author" content="Christian Castro">
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
                        <input type="hidden" name="d_id" value="<?php echo $obj->getD_id(); ?>">
                        <div class="form-group">
                            <label for="Tipo Discapacidad">Tipo Discapacidad</label>
                            <input type="text" class="form-control" id="discapacidad" name="discapacidad" value="<?php echo $obj->getD_tipo(); ?>" placeholder="Tipo">
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
} elseif (isset($_POST["d_id"]) && isset($_POST["discapacidad"])) {
    $obj = new DiscapacidadClass();
    $obj->setD_id($_POST["d_id"]);
    $obj->setD_tipo($_POST["discapacidad"]);
    if ($coll->updateDiscapacidades($obj)) {
        //var_dump($obj);
        header("Location: /admin/discapacidades/");
        exit();
    } else {
        echo "Hubo un error al intentar actualizar la discapacidad.";
    }
} else {
    header("Location: /admin/discapacidades/");
    exit();
}
