<?php

spl_autoload_register(

    function ($class) {
        //echo $class;
        static $classes = null;
        if ($classes === null) {
            $classes = [
              'mas_acceso\\util\\Collector'  => 'src/util/Collector.php',
              'mas_acceso\\util\Database' => 'src/util/database/Database.php',
              'mas_acceso\\usuario\\Rol\\ColectorRol' => 'src/Usuario/Rol/ColectorRol.php',
              'mas_acceso\\usuario\\Rol\\RolClass' => 'src/Usuario/Rol/RolClass.php',
              'mas_acceso\\usuario\\Rol\\index' => 'src/Usuario/Rol/index.php',
              'mas_aceso\\edificio\\EdificioClass' => 'src/Edificio/EdificioClass.php',
              'mas_acceso\\edificio\\EdificioCollector' =>'src/Edificio/EdificioCollector.php',
              'mas_acceso\\util\\database\\Database' => 'src/util/database/Database.php',
              'mas_acceso\\util\\Functions'=> 'src/util/Functions.php',
               'mas_acceso\\rol\crear\\index' => 'admin/rol/crear/index.php',
                 'mas_acceso\\rol\editar\\index' => 'admin/rol/editar/index.php',
                'mas_acceso\\usuario\\Permiso\\PermisoClass' => 'src/Usuario/Permiso/PermisoClass.php',
                'mas_acceso\\usuario\\Permiso\\ColectorPermiso' => 'src/Usuario/Permiso/ColectorPermiso.php'
                
            ];
        }

        $cn = $class;
        if (isset($classes[$cn])) {
            //echo $_SERVER['DOCUMENT_ROOT'].'/mas-acceso/'. $classes[$cn];
            include $_SERVER['DOCUMENT_ROOT'] .'/mas-acceso/'. $classes[$cn];
        } else {
            echo "DERPST!   ".$cn;
        }
    }
);
