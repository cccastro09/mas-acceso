<?php
namespace mas_acceso\admin\permiso;

require_once "../../src/autoload.php";
use mas_acceso\usuario\Permiso\ColectorPermiso;
use mas_acceso\usuario\Permiso\PermisoClass;
//require_once "ColectorRol.php";
$cole= new ColectorPermiso();

foreach ($cole->leerPermiso() as $datos) {
   ?>
    <label>Nombre</label>
 <label><?php echo $datos->getDescripcion(); ?></label>
    <a href="editar/index.php?id=<?php echo $datos->getId(); ?>">Editar</a>
    <a href="borrar/index.php?id=<?php echo $datos->getId(); ?>">Eliminar</a><br>

 <?php  
}
    
    ?> 
<a href="crear/index.php">Crear nuevo permiso</a>
