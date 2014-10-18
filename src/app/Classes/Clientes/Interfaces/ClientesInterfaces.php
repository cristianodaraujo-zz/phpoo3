<?php

namespace app\Classes\Clientes\Interfaces;


interface ClientesInterfaces
{
    public function getNomeRS();

    public function getCnpjCpf();

    public function getEmail();

    public function getTelefone();

    public function getRua();

    public function getNumero();

    public function getComplemento();

    public function getBairro();

    public function getCep();

    public function getMunicipio();

    public function getUf();

    public function getTipo();

    public function getGrauImportance();

}