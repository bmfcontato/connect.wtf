<?php

require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'config.php');

use Noob\Router\Router as Router;

$app = new Router();
$app->run();
