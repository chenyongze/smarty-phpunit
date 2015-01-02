<?php
/**
 * Smarty PHPunit tests for cache resource file
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

include_once 'CacheResourceTestCommon.php';

/**
 * class for cache resource file tests
 */
class CacheResourceCustomMysqlTest extends CacheResourceTestCommon
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        $this->smarty->setCachingType('mysqltest');
        $this->smarty->addPluginsDir(SMARTY_DIR . '../demo/plugins/');
        $this->smarty->addPluginsDir('./PHPunitplaugins');
    }
}
