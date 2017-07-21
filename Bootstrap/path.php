<?php

if(!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if(!defined('ROOT')) {
    define('ROOT', realpath(dirname(__DIR__)));
}

if(!defined('BOOTSTRAP')) {
    define('BOOTSTRAP', ROOT . DS . 'Bootstrap');
}

if(!defined('PUBLIC')) {
    define('PUBLIC', ROOT . DS . 'public');
}

if(!defined('VENDOR')) {
    define('VENDOR', ROOT . DS . 'vendor');
}

if(!defined('APP')) {
    define('APP', ROOT . DS . 'App');
}

if(!defined('APP_CONFIG')) {
    define('APP_CONFIG', APP . DS . 'Config');
}

if(!defined('APP_CONFIG_SMARTY')) {
    define('APP_CONFIG_SMARTY', APP_CONFIG . DS . 'Smarty');
}

if(!defined('APP_CONFIG_SMARTY_TEMPLATES_C')) {
    define('APP_CONFIG_SMARTY_TEMPLATES_C', APP_CONFIG_SMARTY . DS . 'templates_c');
}

if(!defined('APP_CONFIG_SMARTY_CONFIGS')) {
    define('APP_CONFIG_SMARTY_CONFIGS', APP_CONFIG_SMARTY . DS . 'configs');
}

if(!defined('APP_CONFIG_SMARTY_CACHE')) {
    define('APP_CONFIG_SMARTY_CACHE', APP_CONFIG_SMARTY . DS . 'cache');
}

if(!defined('VIEW')) {
    define('VIEW', APP . DS . 'View');
}

if(!defined('TEMPLATE')) {
    define('TEMPLATE', VIEW . DS  . 'Template');
}

