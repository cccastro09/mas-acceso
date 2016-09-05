<?php
namespace mas_acceso\util;

/**
 * Funciones static para ser reutilizadas
 */
class Functions
{

    public function __construct()
    {
        die('no contruction allowed :v');
    }

    /**
     * Genera un uuid v4 único y seguro.
     * @return string El id.
     */
    public static function guid(): string
    {
        $data = openssl_random_pseudo_bytes(16);

        assert(strlen($data) == 16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public static function getNameSpaceFromFile($fileName)
    {
        $classes = [
        'mas_acceso\\util\\Collector'  => 'src/util/Collector.php',
        'mas_acceso\\util\Database' => 'src/util/database/Database.php',
        'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/ColectorRol.php',
        'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/RolClass.php',
        'mas_acceso\\usuario\\Rol' => 'src/Usuario/Rol/index.php',
        'mas_aceso\\edificio\\EdificioClass' => 'src/Edificio/EdificioClass.php',
        'mas_acceso\\edificio\\EdificioCollector' =>'src/Edificio/EdificioCollector.php',
        'mas_acceso\\util\\database\\Database' => 'src/util/database/Database.php',
        'mas_acceso\\util\\Functions'=> 'src/util/Functions.php'
        ];

        $match= array_filter($classes, function ($v, $k) use ($fileName) {
            return strpos($v, $fileName) !== false;
        }, ARRAY_FILTER_USE_BOTH);
        return key($match);
    }
}
