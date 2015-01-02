<?php
/**
 * Smarty PHPunit tests resource plugins
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for resource plugins tests
 */
class ResourcePluginTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test resource plugin rendering
     */
    public function testResourcePlugin()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $this->assertEquals('hello world', $this->smarty->fetch('db:test'));
    }

    /**
     * test resource plugin rendering
     */
    public function testResourcePluginObject()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $this->assertEquals('hello world', $this->smarty->fetch('db2:test'));
    }

    /**
     * test resource plugin rendering of a registered object
     */
    public function testResourcePluginRegisteredInstance()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $this->smarty->loadPlugin('Smarty_Resource_Db2');
        $this->smarty->registerResource('db2a', new Smarty_Resource_Db2('db2a'));
        $this->assertEquals('hello world', $this->smarty->fetch('db2a:test'));
    }

    /**
     * test resource plugin rendering of a recompiling resource
     */
    public function testResourcePluginRecompiled()
    {
        return;
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        try {
            $this->assertEquals('hello world', $this->smarty->fetch('db3:test'));
        }
        catch (Exception $e) {
            $this->assertContains('not return a destination', $e->getMessage());

            return;
        }
        $this->fail('Exception for empty filepath has not been thrown.');
    }

    /**
     * test resource plugin non-existent compiled cache of a recompiling resource
     */
    public function testResourcePluginRecompiledCompiledFilepath()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $tpl = $this->smarty->createTemplate('db2:test.tpl');
        $expected = realpath('./templates_c/' . sha1('db2:test.tpl') . '.db2.test.tpl.php');
        $this->assertFalse(!!$expected);
        $this->assertFalse($tpl->compiled->filepath);
    }

    /**
     * test resource plugin rendering of a custom resource
     */
    public function testResourcePluginMysql()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $this->assertEquals('hello world', $this->smarty->fetch('mysqltest:test.tpl'));
    }

    /**
     * test resource plugin timestamp of a custom resource
     */
    public function testResourcePluginMysqlTimestamp()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $tpl = $this->smarty->createTemplate('mysqltest:test.tpl');
        $this->assertEquals(strtotime("2010-12-25 22:00:00"), $tpl->source->timestamp);
    }

    /**
     * test resource plugin timestamp of a custom resource with only fetch() implemented
     */
    public function testResourcePluginMysqlTimestampWithoutFetchTimestamp()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $tpl = $this->smarty->createTemplate('mysqlstest:test.tpl');
        $this->assertEquals(strtotime("2010-12-25 22:00:00"), $tpl->source->timestamp);
    }

    /**
     * test resource plugin compiledFilepath of a custom resource
     */
    public function testResourcePluginMysqlCompiledFilepath()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $tpl = $this->smarty->createTemplate('mysqltest:test.tpl');
        $expected = realpath('./templates_c/' . sha1('mysqltest:test.tpl') . '_0.mysqltest.test.tpl.php');
//        $this->assertTrue(!!$expected);
        $this->assertEquals($expected, realpath($tpl->compiled->filepath));
    }

    public function testResourcePluginMysqlCompiledFilepathCache()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setForceCompile(true);
        $this->smarty->fetch('mysqltest:test.tpl');
        $tpl = $this->smarty->createTemplate('mysqltest:test.tpl');
        $expected = realpath('./templates_c/' . sha1('mysqltest:test.tpl') . '_0.mysqltest.test.tpl.cache.php');
 //       $this->assertTrue(!!$expected);
        $this->assertEquals($expected, realpath($tpl->compiled->filepath));
        $this->smarty->caching = false;
    }

    /**
     * test resource plugin timestamp
     */
    public function testResourcePluginTimestamp()
    {
        $this->smarty->addPluginsDir("./PHPunitplugins/");
        $tpl = $this->smarty->createTemplate('db:test');
        $this->assertTrue(is_integer($tpl->source->timestamp));
        $this->assertEquals(10, strlen($tpl->source->timestamp));
    }

    public function testResourcePluginExtendsall()
    {
        $this->smarty->addPluginsDir(SMARTY_DIR . "../demo/plugins/");
        $this->smarty->setTemplateDir(array(
                                          'root' => './templates',
                                          './templates_2',
                                          './templates_3',
                                          './templates_4',
                                      ));

        $expected = "templates\n\ntemplates_3\ntemplates\n\ntemplates_4";
        $this->assertEquals($expected, $this->smarty->fetch('extendsall:extendsall.tpl'));
    }

    public function testResourcePluginExtendsallOne()
    {
        $this->smarty->addPluginsDir(SMARTY_DIR . "../demo/plugins/");
        $this->smarty->setTemplateDir(array(
                                          'root' => './templates',
                                          './templates_2',
                                          './templates_3',
                                          './templates_4',
                                      ));

        $expected = "templates\ntemplates";
        $this->assertEquals($expected, $this->smarty->fetch('extendsall:extendsall2.tpl'));
    }
}
