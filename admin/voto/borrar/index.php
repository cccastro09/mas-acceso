<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\edificio\voto\VotoCollector;

$coll = new VotoCollector();
if (isset($_GET["id"])) {
    $obj = $coll->deleteVoto($_GET["id"]);
    header("Location: /admin/voto/");
    exit();
} else {
    header("Location: /admin/voto/");
    exit();
}
