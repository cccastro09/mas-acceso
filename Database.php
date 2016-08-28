<?php

class Database
{
    private static $dbName = 'df6tak7s6ujttu' ;
    private static $dbHost = 'ec2-54-243-50-185.compute-1.amazonaws.com' ;
    private static $dbUsername = 'zripkhfignctym';
    private static $dbUserPassword = 'iEyioD-75aYs4EFyoAZREUBRys';

    private static $cont  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
          self::$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}

?>
