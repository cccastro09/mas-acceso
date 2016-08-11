<?php

require 'VotoCollector.php';
require 'Voto.php';

    $coll = new CollectorVoto();

if(isset($_GET["id"])){
    
    $obj = $coll->getVoto($_GET["id"]);
    
    ?>
    <form action="editaVoto.php" method="post">
    <input type="hidden" id="v_id" name="v_id" value="<?php echo $obj->getId(); ?>"/>
        <div>
            <label for="name">Voto del edificio <?php echo $edificio->getE_name();?></label>
            <select name="v_val">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
      </div>
        <div class="button">
            <button type="submit">Actualizar</button>
        </div>"
    </form>
   
   <?php 
}else if(isset($_POST["v_id"]) && isset($_POST["e_id"]) && isset($_POST["u_id"]) && isset($_POST["v_val"])){
    
    $obj = new Voto();
    $obj->setV_id($_POST["v_id"]);
    $obj->setU_id($_POST["u_id"]);
    $obj->setE_id($_POST["e_id"]);
    $obj->setV_val($_POST["v_val"]);
  
    
    if($coll->updateVoto($obj)){
        echo "Voto actualizado con éxito";
    }else{
        echo "Hubo un error al intentar actualizar el Voto.";
    }
    
}else{
    echo "derp.";
}