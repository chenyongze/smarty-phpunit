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
class CacheResourceCustomPDOTest extends CacheResourceTestCommon
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
       // $this->markTestSkipped();
        $this->smarty->setCachingType('pdo');
        $this->smarty->addPluginsDir(SMARTY_DIR . '../demo/plugins/');
        $this->smarty->addPluginsDir('./PHPunitplaugins');
        $this->smarty->loadPlugin('Smarty_CacheResource_Pdo');
        $this->smarty->registerCacheResource('pdo', new Smarty_CacheResource_Pdo($this->getPDO(), 'smarty_cache'));
    }
}