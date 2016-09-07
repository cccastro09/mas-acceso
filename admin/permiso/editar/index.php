<?php
 namespace mas_acceso\permiso\editar;
require_once "../../../src/autoload.php";
use mas_acceso\usuario\Permiso\ColectorPermiso;
use mas_acceso\usuario\Permiso\PermisoClass;
if(isset($_GET["id"])){
    $col= new ColectorPermiso();
$per = $col->getPermiso($_GET["id"]);
 

?>
    <form enctype="multipart/form-data" action="#" method="post">
    <input type="hidden" id="id" name="id" value="<?php echo $per->getId(); ?>"/>
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $per->getDescripcion();?>"><br>
            <label for="name">Constante</label>
            <input type="text" name="constante" value="<?php echo $per->getConstante();?>"><br>
      </div>
    
        <div class="button">
            <button name= "update" type="submit">Update</button>
        </div>
    </form>
<?php
    
    if(isset($_POST["nombre"])){
    $per = $col->getPermiso($_GET["id"]);
    $per->setDescripcion($_POST["nombre"]);
    
    $col->updatePermiso($per);
    }
    if(isset($_POST["constante"])){
        $per = $col->getPermiso($_GET["id"]);
      $per->setConstante($_POST["constante"]);
         $col->updatePermiso($per);
    }
     if(isset($_POST["update"]))
    header("location: ../");
}