<?php
spl_autoload_register(
    function ($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = [
              'mas_aceso\\edificio\\edificio' => '/src/Edificio/EdificioClass.php',
              'mas_aceso\\util\\database\\database' => '/src/util/database/Database.php'
            ];
        }

        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
      });
