<?php

require_once(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'config.php');

use App\Controller\Controller as Controller;

$app = new Controller();
$app->index();
