<?php

require_once __DIR__ . '/bootstrap.php';

require_once __DIR__ . '/../src/app/view/pages/header.php';

use \app\Classes\Configs\Route;
$router = new Route();
require_once($router->Routing());


require_once __DIR__ . '/../src/app/view/pages/footer.php';
