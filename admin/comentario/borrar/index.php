<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/src/autoload.php';

use mas_acceso\edificio\comentario\ComentarioCollector;

$coll = new ComentarioCollector();
if (isset($_GET["id"])) {
    $obj = $coll->deleteComentario($_GET["id"]);
    header("Location: /admin/comentario/");
    exit();
} else {
    header("Location: /admin/comentario/");
    exit();
}
