<?php

use app\Classes\Databases\Connect;
use app\Classes\Databases\Crud;


$clientes = new Crud(Connect::getDb());
$dados =  $clientes->read();
