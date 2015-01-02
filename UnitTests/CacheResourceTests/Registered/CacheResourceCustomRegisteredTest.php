<?php
/**
 * Smarty PHPunit tests for cache resource file
 *
 * @package PHPunit
 * @author  Uwe Tews
 */


/**
 * class for cache resource file tests
 */
class CacheResourceCustomRegisteredTest extends CacheResourceTestCommon
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        $this->smarty->addPluginsDir(SMARTY_DIR . '../demo/plugins/');
        $this->smarty->addPluginsDir('./PHPunitplaugins');
        if (!class_exists('Smarty_CacheResource_Mysqltest', false)) {
            require_once(dirname(__FILE__) . "/PHPunitplugins/cacheresource.mysqltest.php");
        }
        $this->smarty->setCachingType('foobar');
        $this->smarty->registerCacheResource('foobar', new Smarty_CacheResource_Mysqltest());
    }
}
