<?php
 namespace mas_acceso\rol\editar;
require_once "../../../src/autoload.php";
use mas_acceso\usuario\Rol\ColectorRol;
use mas_acceso\usuario\Rol\RolClass;
if(isset($_GET["id"])){
    $col= new ColectorRol();
$rol = $col->getRol($_GET["id"]);
 

?>
    <form enctype="multipart/form-data" action="#" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $rol->getId(); ?>"/>
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $rol->getNombre();?>"><br>
            <label for="name">Constante</label>
            <input type="text" name="constante" value="<?php echo $rol->getConstante();?>"><br>
      </div>
    
        <div class="button">
            <button name= "update" type="submit">Update</button>
        </div>
    </form>
<?php
    
    if(isset($_POST["nombre"])){
    $rol = $col->getRol($_GET["id"]);
    $rol->setNombre($_POST["nombre"]);
    
    $col->updateRol($rol);
    }
    if(isset($_POST["constante"])){
        $rol = $col->getRol($_GET["id"]);
      $rol->setConstante($_POST["constante"]);
         $col->updateRol($rol);
    }
     if(isset($_POST["update"]))
    header("location: ../");
}