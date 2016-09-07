<?php
namespace mas_acceso\permiso\borrar;
require_once "../../../src/autoload.php";
use mas_acceso\usuario\Permiso\ColectorPermiso;
use mas_acceso\usuario\Permiso\PermisoClass;

$col= new ColectorPermiso();

if (isset($_GET["id"])) {
$col->deletePermiso($_GET["id"]);
    header("location: ../");
    exit();
}else{
    header("location: ../");
    exit();
}