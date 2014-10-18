<?php

namespace app\Classes\Databases\Abstracts;

use app\Classes\Databases\Connect;

class DataBasesAbstract extends Connect
{
    protected static $tabela;
    
    public function read()
    {
        $pdo = parent::getDb();
        try{
        $listar = $pdo->prepare("SELECT * FROM " . self::$tabela);
        $listar->execute();
        $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível listar dados do banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
        return $dados;
    }
    
    
}
