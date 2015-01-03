<?php
/**
 * Smarty PHPunit tests for cache resource file
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

include_once 'UnitTests/CacheResourceTests/CacheResourceTestCommon.php';

/**
 * class for cache resource file tests
 */
class CacheResourceCustomPDOGzipTest extends CacheResourceTestCommon
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        //$this->markTestSkipped();

        $this->smarty->setCachingType('pdo');
        $this->smarty->addPluginsDir(SMARTY_DIR . '../demo/plugins/');
        $this->smarty->addPluginsDir(__DIR__ . '/../PHPunitplugins');
        $this->assertTrue($this->smarty->loadPlugin('Smarty_CacheResource_Pdo'), 'loadPlugin() could not load PDO cache resource');
        $this->assertTrue($this->smarty->loadPlugin('Smarty_CacheResource_Pdo_Gzip'), 'loadPlugin() could not load PDOGzip cache resource');
        $this->smarty->registerCacheResource('pdo', new Smarty_CacheResource_Pdo_Gzip($this->getPDO(), 'smarty_cache'));
    }
}
