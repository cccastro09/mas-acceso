<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\Usuario\Discapacidades\CollectorDiscapacidad;

$coll = new CollectorDiscapacidad();
if (isset($_GET["d_id"])) {
    $obj = $coll->deleteDiscapacidades($_GET["d_id"]);
    header("Location: /admin/discapacidades/");
    exit();
} else {
    header("Location: /admin/discapacidades/");
    exit();
}
