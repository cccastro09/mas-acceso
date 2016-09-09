<?php

spl_autoload_register(

    function ($class) {
        //echo $class;
         //echo $_SERVER['DOCUMENT_ROOT'];
        static $classes = null;
        if ($classes === null) {
            $classes = [
              'mas_acceso\\util\\Collector'  => 'src/util/Collector.php',
              'mas_acceso\\util\Database' => 'src/util/database/Database.php',
              'mas_acceso\\usuario\\Rol\\ColectorRol' => 'src/Usuario/Rol/colectorRol.php',
              'mas_acceso\\usuario\\Rol\\RolClass' => 'src/Usuario/Rol/RolClass.php',
              'mas_acceso\\edificio\\EdificioClass' => 'src/Edificio/EdificioClass.php',
              'mas_acceso\\edificio\\EdificioCollector' =>'src/Edificio/EdificioCollector.php',
              'mas_acceso\\edificio\\reporte\\ReporteClass' => 'src/Edificio/Reporte/ReporteClass.php',
              'mas_acceso\\edificio\\reporte\\ReporteCollector' =>'src/Edificio/Reporte/ReporteCollector.php',
              'mas_acceso\\util\\database\\Database' => 'src/util/database/Database.php',
              'mas_acceso\\util\\Functions' => 'src/util/Functions.php',
              'mas_acceso\\usuario\\UsuarioClass' => 'src/Usuario/UsuarioClass.php',
              'mas_acceso\\usuario\\UsuarioInfoClass' => 'src/Usuario/UsuarioInfoClass.php',
              'mas_acceso\\usuario\\usuarioColector' => 'src/Usuario/usuarioColector.php',
              'mas_acceso\\usuario\\Permiso\\PermisoClass' => 'src/Usuario/Permiso/PermisoClass.php',
              'mas_acceso\\usuario\\Permiso\\ColectorPermiso' => 'src/Usuario/Permiso/ColectorPermiso.php',
              'mas_acceso\\edificio\\categoria\\CategoriaClass' => 'src/Edificio/Categoria/CategoriaClass.php',
              'mas_acceso\\edificio\\categoria\\CategoriaCollector' => 'src/Edificio/Categoria/CategoriaCollector.php',
              'mas_acceso\\edificio\\comentario\\ComentarioClass' => 'src/Edificio/Comentario/ComentarioClass.php',
              'mas_acceso\\edificio\\comentario\\ComentarioCollector' => 'src/Edificio/Comentario/ComentarioCollector.php',
              'mas_acceso\\edificio\\voto\\VotoClass' => 'src/Edificio/Voto/VotoClass.php',
              'mas_acceso\\edificio\\voto\\VotoCollector' => 'src/Edificio/Voto/VotoCollector.php',
              'mas_acceso\\Usuario\\Discapacidades\\CollectorDiscapacidad' => 'src/Usuario/Discapacidades/CollectorDiscapacidad.php',
              'mas_acceso\\Usuario\\Discapacidades\\DiscapacidadClass' => 'src/Usuario/Discapacidades/DiscapacidadClass.php',
              'mas_acceso\\Autenticacion\\AutenticarClass'  => 'src/Autenticacion/AutenticarClass.php/


            ];
        }

        $cn = $class;
        if (isset($classes[$cn])) {
            include $_SERVER['DOCUMENT_ROOT'] .'/'. $classes[$cn];
        } else {
            echo "DERPST!   ".$cn;
        }
    }
);
