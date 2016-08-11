<?php
require 'EdificioCollector.php';
require 'VotoCollector.php';
if(isset($_POST)){
  $vCollector = new VotoCollector();

  $voto = new Voto();
  $voto->setV_id($_POST["v_id"]);
  $voto->setU_id($_POST["u_id"]);
  $voto->setE_id($_POST["e_id"]);
  $voto->setV_val($_POST["v_val"]);
  
  $vCollector->addVoto($voto);
}else{
?>
  <html>

  <head>
  </head>

  <body>
    <form action="crearVoto.php" method="post">
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
        <button type="submit">Votar</button>
      </div>
    </form>
  </body>

  </html>
<?php
     }?>