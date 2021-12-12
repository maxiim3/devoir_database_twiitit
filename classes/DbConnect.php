<?php

class DbConnect
{
    private static $_host = 'localhost';
    private static $_port = 3306;
    private static $_user = 'maxtam';
    private static $_password = '19882021';
    private static $_dbName = 'twiitit';
    private static $_urlCnx;
    private static $_pdo;


    private function __construct() {}

    public static function getCnxToDB() {
        /**
         * URL de connexion a la BDD host/port/user/pdo
         */
        self::$_urlCnx = "mysql:host=".self::$_host.":".self::$_port.";dbname=".self::$_dbName;

        try {
            return new PDO(self::$_urlCnx, self::$_user, self::$_password);
        }
        catch (PDOException $e) {
            echo "ERROR DB: {$e->getMessage()}<br><br>";
        }

    }
}