<?php

spl_autoload_register(

    function ($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = [
              'mas_aceso\\util\\Collector'  => 'src/util/Collector.php',
              'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/ColectorRol.php',
              'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/RolClass.php',
              'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/index.php',
              'mas_aceso\\edificio\\Edificio' => 'src/Edificio/EdificioClass.php',
              'mas_aceso\\util\\database\\Database' => 'src/util/database/Database.php',
              'mas_aceso\\util\\Functions'=> 'src/util/Functions.php'
            ];
        }

        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            include $_SERVER['DOCUMENT_ROOT'] . $classes[$cn];
        }
    }
);
