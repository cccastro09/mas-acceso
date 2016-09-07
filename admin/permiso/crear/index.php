<?php
 namespace mas_acceso\permiso\crear;
require "../../../src/autoload.php";
use mas_acceso\usuario\Permiso\ColectorPermiso;
use mas_acceso\usuario\Permiso\PermisoClass;

if(isset($_POST["Crear"])){ 
$col= new ColectorPermiso();
$per= new PermisoClass();
    $per->setConstante($_POST["constante"]);
    $per->setDescripcion($_POST["nombre"]);
   if( $col->addPermiso($per)){
       
        header("Location: ../");
            exit();
          }else{
              echo "Hubo un error al intentar actualizar el Permiso.";
          }
    


}
?>
<html>
 <form action="index.php" method="post" >
     <label>Crear Permiso</label><br>
     <label>Descripcion</label>
   <input type="text" name="nombre" >
   <label>Constante</label>
      <input type="text" name="constante" >
     <button type="submit" name="Crear">Crear</button>
 </form>


</html>
