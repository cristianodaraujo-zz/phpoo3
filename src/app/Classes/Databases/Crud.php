<?php

namespace app\Classes\Databases;
use app\Classes\Databases\Abstracts\DataBasesAbstract;
use app\Classes\Clientes\Types\Clientes;
use app\Classes\Clientes\Types\ClientesPessoasFisicas;
use app\Classes\Clientes\Types\ClientesPessoasJuridicas;


class Crud
{
    private $connect;

    public function __construct(\PDO $connect) {
        $connect instanceof \PDO;
        $this->connect = $connect;
    }

    public function persist(Clientes $clientes)
    {
        try{
            $this->connect->beginTransaction();
            $cadastrar = "INSERT INTO clientes (nome, email, tipo, cpf, telefone, rua, numero, bairro, cep, complemento, estrela, cidade, uf, celular, telcontato, fax,  cobrrua, cobrnumero, cobrcomplemento, cobrbairro, cobrcep, cobrmunicipio, cobruf) VALUES (:nome, :email, :tipo, :cpf, :telefone, :rua, :numero, :bairro, :cep, :complemento, :estrela, :cidade, :uf, :celular, :telcontato, :fax, :cobrrua, :cobrnumero, :cobrcomplemento, :cobrbairro, :cobrcep, :cobrmunicipio, :cobruf)";
            $dados = $this->connect->prepare($cadastrar);
            $dados->execute(array(
                "nome"          => $clientes->getNomeRS(),
                "email"         => $clientes->getEmail(),
                "tipo"          => $clientes->getTipo(),
                "cpf"           => $clientes->getCnpjCpf(),
                "telefone"      => $clientes->getTelefone(),
                "rua"           => $clientes->getRua(),
                "numero"        => $clientes->getNumero(),
                "bairro"        => $clientes->getBairro(),
                "cep"           => $clientes->getCep(),
                "complemento"   => $clientes->getComplemento(),
                "estrela"       => $clientes->getGrauImportance(),
                "cidade"        => $clientes->getMunicipio(),
                "uf"            => $clientes->getUf(),
                "celular"       => $clientes->getTelContato(),
                "telcontato"    => $clientes->getTelContato(),
                "fax"           => $clientes->getTelContato(),
                "cobrrua"       => $clientes->getCobrRua(),
                "cobrnumero"    => $clientes->getCobrNumero(),
                "cobrcomplemento" => $clientes->getCobrComplemento(),
                "cobrbairro"    => $clientes->getCobrBairro(),
                "cobrcep"       => $clientes->getCobrCep(),
                "cobrmunicipio" => $clientes->getCobrMunicipio(),
                "cobruf"        => $clientes->getCobrUf()
            ));
            $this->connect->lastInsertId();
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível cadastrar dados no banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
    }

    public function flush()
    {
        try{
            $this->connect->commit();
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível cadastrar dados no banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
        return true;
    }
    
    public function read()
    {

        try{
            $listar = $this->connect->prepare("SELECT * FROM  clientes");
            $listar->execute();
            $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "ERROR: Não foi possível listar dados do banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
        return $dados;
    }

}

