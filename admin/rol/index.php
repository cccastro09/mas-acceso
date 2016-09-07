<?php
namespace mas_acceso\admin\Rol;

require_once "../../src/autoload.php";
use mas_acceso\usuario\Rol\ColectorRol;
use mas_acceso\usuario\Rol\RolClass;
//require_once "ColectorRol.php";
$cole= new ColectorRol();

foreach ($cole->leerRol() as $datos) {
   ?>
    <label>Nombre</label>
 <label><?php echo $datos->getNombre(); ?></label>
    <a href="editar/index.php?id=<?php echo $datos->getId(); ?>">Editar</a>
    <a href="borrar/index.php?id=<?php echo $datos->getId(); ?>">Eliminar</a><br>

 <?php  
}
    
    ?> 
