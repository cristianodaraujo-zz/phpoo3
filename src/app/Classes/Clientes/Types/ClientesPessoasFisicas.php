<?php

namespace app\Classes\Clientes\Types;


class ClientesPessoasFisicas extends Clientes
{
    public $celular;

        /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }
}