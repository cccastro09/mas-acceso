<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\discapacidad\DiscapacidadCollector;

$coll = new CollectorDiscapacidad();
if (isset($_GET["e_id"])) {
    $obj = $coll->deletediscapacidad($_GET["d_id"]);
    header("Location: /admin/discapacidad/");
    exit();
} else {
    header("Location: /admin/discapacidad/");
    exit();
}
