<?php
/**
 * Smarty PHPunit tests compiler plugin
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for compiler plugin tests
 */
class CompilerPluginTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test compiler plugin
     */
    public function testCompilerPlugin()
    {
        $this->smarty->addPluginsDir(dirname(__FILE__) . "/PHPunitplugins/");
        $this->assertEquals('test output', $this->smarty->fetch('eval:{test data="test output"}{/test}'));
    }
}
