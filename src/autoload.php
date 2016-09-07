<?php

spl_autoload_register(

    function ($class) {
        //echo $class;
        static $classes = null;
        if ($classes === null) {
            $classes = [
              'mas_acceso\\util\\Collector'  => 'src/util/Collector.php',
              'mas_acceso\\util\Database' => 'src/util/database/Database.php',
              'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/ColectorRol.php',
              'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/RolClass.php',
              'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/index.php',
              'mas_acceso\\edificio\\EdificioClass' => 'src/Edificio/EdificioClass.php',
              'mas_acceso\\edificio\\EdificioCollector' =>'src/Edificio/EdificioCollector.php',
              'mas_acceso\\edificio\\reporte\\ReporteClass' => 'src/Edificio/Reporte/ReporteClass.php',
              'mas_acceso\\edificio\\reporte\\ReporteCollector' =>'src/Edificio/Reporte/ReporteCollector.php',
              'mas_acceso\\util\\database\\Database' => 'src/util/database/Database.php',
              'mas_acceso\\util\\Functions'=> 'src/util/Functions.php',
               'mas_acceso\\rol\crear\\index' => 'admin/rol/crear/index.php',
                 'mas_acceso\\rol\editar\\index' => 'admin/rol/editar/index.php'

            ];
        }

        $cn = $class;
        if (isset($classes[$cn])) {
            //echo $_SERVER['DOCUMENT_ROOT'].'/mas-acceso/'. $classes[$cn];
            include $_SERVER['DOCUMENT_ROOT'] .'/'. $classes[$cn];
        } else {
            echo "DERPST!   ".$cn;
        }
    }
);
