<?php

namespace app\Classes\Databases;


abstract class Connect 
{
    private static $dsn = 'mysql:host=localhost;dbname=phpoo';
    private static $user = 'root';
    private static $password = 'root';

    private static function connection() 
    {
        try {
            $pdo = new \PDO(self::$dsn, self::$user, self::$password);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível conectar ao banco de dados ";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
    }
    
    public static function getDb()
    {
        return self::connection();
    }
}
