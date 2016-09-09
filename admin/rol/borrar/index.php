<?php
namespace mas_acceso\rol\borrar;
require_once "../../../src/autoload.php";
use mas_acceso\usuario\Rol\ColectorRol;
use mas_acceso\usuario\Rol\RolClass;

$col= new ColectorRol();

if (isset($_GET["id"])) {
$col->deleteRol($_GET["id"]);
    header("location: ../");
    exit();
}else{
    header("location: ../");
    exit();
}