<?php

namespace app\Classes\Configs;


class Route
{
    public function Routing()
    {
        $route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        $path = $route['path'];
        $path = explode('/', $path);
        $pagina = $path[1];
        $permission = array('vizualizarCliente', 'index.php');

        if(empty($pagina)){
            return __DIR__ . '/../../view/pages/listaClientes.php';
        }elseif($pagina == 'visualizarCliente'){
            return __DIR__ . '/../../view/pages/visualizarCliente.php';
        }elseif(isset($pagina ) && in_array($pagina,$permission)!= $permission){
            return __DIR__ . '/../../view/pages/404.php';
        }else{
            return __DIR__ . '/../../view/pages/listaClientes.php';
        }
    }
} 