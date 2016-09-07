<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\edificio\EdificioCollector;

$coll = new EdificioCollector();
if (isset($_GET["e_id"])) {
    $obj = $coll->deleteEdificio($_GET["e_id"]);
    header("Location: /admin/lugares/");
    exit();
} else {
    header("Location: /admin/lugares/");
    exit();
}
