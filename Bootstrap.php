<?php
//require '../Smarty/libs/Smarty.class.php';
require_once __DIR__ . '/../Smarty/libs/SmartyBC.class.php';
//Smarty_Autoloader::register();
if (!defined('SMARTY_COMPOSER_INSTALL')) {
    foreach (array(__DIR__ . '/../../autoload.php', __DIR__ . '/../vendor/autoload.php', __DIR__ . '/vendor/autoload.php') as $file) {
        if (file_exists($file)) {
            define('SMARTY_COMPOSER_INSTALL', $file);
            break;
        }
    }
    unset($file);
}
require_once 'PHPunit_Smarty.php';
require_once 'PHPunit_SmartyBC.php';
require_once 'PHPunit_SmartyBoth.php';
require_once 'PHPunit_SmartyDB.php';
