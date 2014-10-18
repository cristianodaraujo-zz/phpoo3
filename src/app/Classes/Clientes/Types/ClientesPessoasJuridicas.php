<?php

namespace app\Classes\Clientes\Types;

class ClientesPessoasJuridicas extends Clientes
{
    public  $fax;

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

} 