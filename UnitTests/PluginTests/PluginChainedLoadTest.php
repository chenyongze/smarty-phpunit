<?php
/**
 * Smarty PHPunit tests chained loading of dependend pluglind
 *
 * @package PHPunit
 * @author  Rodney Rehm
 */

/**
 * class for modifier tests
 */
class PluginChainedLoadTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    public function testPluginChainedLoad()
    {
        $this->smarty->addPluginsDir(__DIR__ . "/PHPunitplugins/");
        $this->assertContains('from chain3', $this->smarty->fetch('test_plugin_chained_load.tpl'));
    }
}
