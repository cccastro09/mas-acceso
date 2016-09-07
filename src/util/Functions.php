<?php
namespace mas_acceso\util;

use DateTime;

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

    /**
     * Verifica si el url dado corresponde a la página dada.
     * @param  string  $pageName El nombre de la página.
     * @param  string  $url      El url a verificar.
     * @return boolean           true si corresponde, false en caso contrario.
     */
    public static function isActive($pageName, $url)
    {
        return $pageName == self::getLastPathSegment($url);
    }

    /**
     * Obtiene el último path del url dada. Tomado de {@link http://stackoverflow.com/a/2273328 stackoverflow}
     * @param  string $url El url a analizar
     * @return string      El path.
     */
    public static function getLastPathSegment($url)
    {
        $path = parse_url($url, PHP_URL_PATH); // to get the path from a whole URL
        $pathTrimmed = trim($path, '/'); // normalise with no leading or trailing slash
        $pathTokens = explode('/', $pathTrimmed); // get segments delimited by a slash

        if (substr($path, -1) !== '/') {
            array_pop($pathTokens);
        }
        return end($pathTokens); // get the last segment
    }

    public static function strToDate($date): DateTime
    {
        $d = DateTime::createFromFormat("Y-m-d H:i:s.u", $date);
        return $d;
    }
}
