<?php

require 'VotoCollector.php';
require 'Voto.php';

    $coll = new CollectorVoto();

if(isset($_GET["id"])){
    
    $obj = $coll->deleteVoto($_GET["id"]);
}else{
  echo "voto not found.";
}