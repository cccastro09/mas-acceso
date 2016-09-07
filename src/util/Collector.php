<?php
namespace mas_acceso\util;

use mas_acceso\util\database\Database as DB;
use mas_acceso\util\Functions as FNC;
use PDO;

class Collector
{
    protected $con;

    public function __construct()
    {
        $this->con = DB::connect();
    }

    public function read($table, $class = 'stdClass')
    {
        try {
            $queryRead= 'SELECT * FROM '. $table;
            $stmt = $this->con->prepare($queryRead);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, $class);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /**
     * Busca un objeto por un $id dado.
     * @param  int $id     El id del objeto a buscar.
     * @param  String $table  Nombre de la tabla en el que se buscará el objeto.
     * @param  String $id_col Nombre de la columna que contiene el id del objeto.
     * @param  string $class  Nombre de la clase en la cual se retornará el objeto.
     * @return mixed     una instancia de $class si se encuentra el objeto, caso contrario retorna false.
     */
    public function getById($id, $table, $id_col, $class = 'stdClass')
    {
        try {
            $queryRead= 'SELECT * FROM '. $table . ' WHERE '.$id_col.'=:e_id';
            $stmt = $this->con->prepare($queryRead);
            $stmt->execute(array(':e_id'=>intval($id)));
            $result = $stmt->fetchObject($class);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function execQuery($query)
    {
        try {
            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
