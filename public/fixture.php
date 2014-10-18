<?php

require_once './bootstrap.php';

use app\Classes\Databases\Crud;
use app\Classes\Databases\Connect;
use app\Classes\Clientes\Types\ClientesPessoasFisicas;
use app\Classes\Clientes\Types\ClientesPessoasJuridicas;

function criarDb() {
    $dsn     = 'mysql:host=localhost';
    $user    = 'root';
    $pass    = 'root';
    $dbname  = 'phpoo';
    $table   = 'clientes';

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
        $pdo->query("use $dbname");
        print("O banco de dados {$dbname} foi criado com sucesso!<br>");
        $tabl ="CREATE table $table(
        id INT( 10 ) AUTO_INCREMENT NOT NULL PRIMARY KEY,
        nome VARCHAR( 250 ) NOT NULL,
        email VARCHAR( 250 ) NOT NULL,
        tipo VARCHAR( 250 ) NOT NULL,
        cpf VARCHAR( 250 ) NOT NULL,
        telefone VARCHAR( 250 ) NOT NULL,
        rua VARCHAR( 250 ) NOT NULL,
        numero VARCHAR( 250 ) NOT NULL,
        bairro VARCHAR( 250 ) NOT NULL,
        cep VARCHAR( 250 ) NOT NULL,
        complemento VARCHAR( 250 ) NOT NULL,
        estrela VARCHAR( 250 ) NOT NULL,
        cidade VARCHAR( 250 ) NOT NULL,
        uf VARCHAR( 250 ) NOT NULL,
        celular VARCHAR( 250 ) NOT NULL,
        fax VARCHAR( 250 ) NOT NULL,
        telcontato VARCHAR( 250 ) NOT NULL,
        cobrrua VARCHAR( 250 ) NOT NULL,
        cobrnumero VARCHAR( 250 ) NOT NULL,
        cobrcomplemento VARCHAR( 250 ) NOT NULL,
        cobrbairro VARCHAR( 250 ) NOT NULL,
        cobrcep VARCHAR( 250 ) NOT NULL,
        cobrmunicipio VARCHAR( 250 ) NOT NULL,
        cobruf VARCHAR( 250 ) NOT NULL);";
        $pdo->exec($tabl);
        print("A tabela {$table} foi criada com sucesso!<br>");

    } catch (PDOException $e) {
        echo "ERROR: Não foi possível cadastrar dados no banco!";
        die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
    }
    return $pdo;
}
criarDb();


$clientes = new ClientesPessoasFisicas("Angelina Archibald", "angelina@email.com.br", "PF", 88888888888, 44435549, "Santos", 777, "Centro", 15500000, "casa", 5, "Maral", "SP");
$clientes
    ->setCelular('1799999999')
    ->setTelContato('173232000')
    ->setCobrRua('Curitiba')
    ->setCobrNumero('77')
    ->setCobrComplemento('Ap.10 - Sala 01')
    ->setCobrBairro('Jd.Paulistao')
    ->setCobrCep('15500000')
    ->setCobrMunicipio('Votuporanga')
    ->setCobrUf('SP')
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();

////////////////////////////////////////////////////////////////////////////

$clientes = new ClientesPessoasJuridicas("Claudia Bertolin", "claudia@email.com.br", "PJ", 12345678912,  32435549, "Amazona", 1, "São Paulo",  "15500-000", "casa", 3, "São Paulo", "sp");
$clientes->setFax('17939393939')
    ->setTelContato('1798765432')
    ->setCobrRua('Amazonas')
    ->setCobrNumero('77')
    ->setCobrComplemento('Ap.4 - Sala 02')
    ->setCobrBairro('Jd.São Paulo')
    ->setCobrCep('15500000')
    ->setCobrMunicipio('Votuporanga')
    ->setCobrUf('SP')
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();

////////////////////////////////////////////////////////////////////////////

$clientes = new ClientesPessoasFisicas("Claudia Bertolin", "claudia@email.com.br", "PF", '22222222222', '32435555', "Bahia", '666', "Centro", '15500000', "bloc07", '3', "Votuporanga", "SP");
$clientes->setCelular('1797777777')
    ->setTelContato('1733334434')
    ->setCobrRua('Dos lirios')
    ->setCobrNumero('9')
    ->setCobrComplemento('casa')
    ->setCobrBairro('centro')
    ->setCobrCep('15500000')
    ->setCobrMunicipio('Votuporanga')
    ->setCobrUf('SP')
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();


////////////////////////////////////////////////////////////////////////////

$clientes = new ClientesPessoasJuridicas("Livros SA", "livros@email.com.br", "PJ", '33333333333', '32431111', "Jair Pedro", '7', "Mastrocola", '15500000', "casa", '4', "Votuporanga", "SP");
$clientes->setFax('1799999999')
    ->setTelContato('173232000')
    ->setCobrRua('Curitiba')
    ->setCobrNumero('77')
    ->setCobrComplemento('Ap.10 - Sala 01')
    ->setCobrBairro('Jd.Paulistao')
    ->setCobrCep('15500000')
    ->setCobrMunicipio('Votuporanga')
    ->setCobrUf('SP')
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();

////////////////////////////////////////////////////////////////////////////

$clientes = new ClientesPessoasFisicas("Felipe Bertolin de Souza", "felipe@email.com.br", "PF", '44444444444', '32979797', "Amazona", '123', "Centro", '15500000', "casa", '1', "Votuporanga", "SP");
$clientes->setCelular('1797777777')
    ->setTelContato('1791778960')
    ->setCobrRua('Bahia')
    ->setCobrNumero('867')
    ->setCobrComplemento('Bloco1')
    ->setCobrBairro('Jd. América')
    ->setCobrCep('15500000')
    ->setCobrMunicipio('São Paulo')
    ->setCobrUf('SP')
;
$insert = new Crud(Connect::getDb());
$insert->persist($clientes);
$insert->flush();