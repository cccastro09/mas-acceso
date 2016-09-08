<?php
namespace mas_acceso\admin\permiso;

require_once "../../src/autoload.php";
use mas_acceso\usuario\Permiso\ColectorPermiso;
use mas_acceso\usuario\Permiso\PermisoClass;
//require_once "ColectorRol.php";
$cole= new ColectorPermiso();
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
        
        <?php include $_SERVER['DOCUMENT_ROOT'].'/mas-acceso/admin/partes/menu.php'; ?>
        
          <div id="page-wrapper">
              <div class="container-fluid">
        <table>
<?php
foreach ($cole->leerPermiso() as $datos) {
   ?>
    <tr>
         <td class="celda"><?php echo $datos->getDescripcion(); ?></td> 

        <td><a class="link" href="editar/index.php?id=<?php echo $datos->getId(); ?>">Editar</a></td>
        <td><a class="link" href="borrar/index.php?id=<?php echo $datos->getId(); ?>">Eliminar</a></td><br>
</tr>
 <?php  
}
    
    ?> 
            </table>
                   <tr>
            <td colspan=14><a class="link" href="crear/index.php">Crear nuevo permiso</a></td>
                       
         </tr>