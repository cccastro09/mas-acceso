<?php
 
spl_autoload_register(
   
    function ($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = [
              'mas_aceso\\edificio\\edificio' => '/src/Edificio/EdificioClass.php',
              'mas_aceso\\util\\database\\database' => '/src/util/database/Database.php',
                 'mas_aceso\\util'  => '/src/util/Collector.php',
                'Rol' => 'src/Usuario/Rol/ColectorRol.php',
                 'Rol' => 'src/Usuario/Rol/RolClass.php',
                'Rol' => 'src/Usuario/Rol/index.php'
                
                
            ];
        }

        $cn = strtolower($class);
        if (isset($classes[$cn])) {

            include $_SERVER['DOCUMENT_ROOT'] . $classes[$cn];

        }
    }
);
