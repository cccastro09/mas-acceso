<?php
 namespace mas_acceso\rol\crear;
require "../../../src/autoload.php";
use mas_acceso\usuario\Rol\ColectorRol;
use mas_acceso\usuario\Rol\RolClass;
if(isset($_POST["Crear"])){ 
$col= new ColectorRol();
$rol= new RolClass();
    $rol->setConstante($_POST["constante"]);
    $rol->setNombre($_POST["nombre"]);
   if( $col->addRol($rol)){
       
        //header("Location: ../../vista/Demo/Demo.php");
            exit();
          }else{
              echo "Hubo un error al intentar actualizar el Demo.";
          }
    


}
?>
<html>
 <form action="index.php" method="post" >
     <label>Crear Rol</label><br>
     <label>Nombre</label>
   <input type="text" name="nombre" >
   <label>Constante</label>
      <input type="text" name="constante" >
     <button type="submit" name="Crear">Crear</button>
 </form>


</html>
