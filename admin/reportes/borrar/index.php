<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\edificio\reporte\ReporteCollector;

$coll = new ReporteCollector();
if (isset($_GET["r_id"])) {
    $obj = $coll->deleteReporte($_GET["r_id"]);
    header("Location: /admin/reportes/");
    exit();
} else {
    header("Location: /admin/reportes/");
    exit();
}
