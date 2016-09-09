<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\edificio\categoria\CategoriaCollector;

$coll = new CategoriaCollector();
if (isset($_GET["id"])) {
    $obj = $coll->deleteCategoria($_GET["id"]);
    header("Location: /admin/categoria/");
    exit();
} else {
    header("Location: /admin/categoria/");
    exit();
}
