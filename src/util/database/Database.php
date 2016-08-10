<?php

namespace mas_aceso\Util\Database;
/**
 * Base de datos.
 */
class Database
{
    private static final $CONNHST = $_ENV["DATABASE_HOST"];
    private static final $DBNAME = $_ENV["DATABASE_NAME"];
    private static final $DBUSER = $_ENV["DATABASE_USER"];
    private static final $DBPSW = $_ENV["DATABASE_PSW"];
    private static $connection;

    public function __construct()
    {
      die('Init function is not allowed');
    }

    /**
     * Retorna el estado de la conexión a la base
     * @return PGSQL_CONNECTION_OK or PGSQL_CONNECTION_BAD.
     */
    public function getconnectionStatus()
    {
      return pg_connection_status($this->connection);
    }


    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$connection )
       {
        try
        {
          self::$connection =  new PDO( "pgsql:host=".self::$CONNHST.";"."dbname=".self::$DBNAME, self::$DBUSER, self::$DBPSW);
          self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$connection;
    }

    public static function disconnect()
    {
        self::$connection = null;
    }

}
