<?php
/**
 * Smarty PHPunit tests for cache resource file
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

require_once(dirname(__FILE__) . "/CacheResourceCustomMemcacheTest.php");

/**
 * class for cache resource file tests
 */
class CacheResourceCustomApcTest extends CacheResourceCustomMemcacheTest
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        if (!function_exists('apc_cache_info') || ini_get('apc.enable_cli')) {
            $this->markTestSkipped();
        }
        $this->smarty->setCachingType('apctest');
        $this->smarty->addPluginsDir(SMARTY_DIR . '../demo/plugins/');
        $this->smarty->addPluginsDir('./PHPunitplaugins');
    }
}
