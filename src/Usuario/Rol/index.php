<?php
namespace mas_acceso\usuario\Rol;

require_once "../../autoload.php";
//require_once "ColectorRol.php";

$cole= new ColectorRol();
foreach ($cole->leerRol() as $datos) {
    echo $datos->getNombre();
}
