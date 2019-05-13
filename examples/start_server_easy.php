<?php

use ESD\BaseServer\ExampleClass\Server\DefaultServer;
use ESD\Plugins\Aop\AopConfig;
use ESD\Plugins\Aop\AopPlugin;
use ESD\Plugins\EasyRoute\EasyRoutePlugin;
use ESD\Plugins\Session\SessionPlugin;

require __DIR__ . '/../vendor/autoload.php';

define("ROOT_DIR", __DIR__ . "/..");
define("RES_DIR", __DIR__ . "/resources");
$server = new DefaultServer();
$server->getPlugManager()->addPlug(new SessionPlugin());
//配置
$server->configure();
//启动
$server->start();
