<?php
/**
 * Smarty PHPunit tests for File resources
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for file resource tests
 */
class CustomResourceAmbiguousTest extends PHPUnit_Smarty
{
    public $_resource = null;

    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        require_once dirname(__FILE__) . '/PHPunitplugins/resource.ambiguous.php';

        // empty the template dir
        $this->smarty->setTemplateDir(array());

        // kill cache for unit test
        //        Smarty::$_resource_cache = array();
    }

    protected function relative($path)
    {
        $path = str_replace(dirname(__FILE__), '.', $path);
        if (DS == "\\") {
            $path = str_replace("\\", "/", $path);
        }

        return $path;
    }

    public function testNone()
    {
        $resource_handler = new Smarty_Resource_Ambiguous(dirname(__FILE__) . '/templates/ambiguous/');
        $this->smarty->registerResource('ambiguous', $resource_handler);
        $this->smarty->setDefaultResourceType('ambiguous');
        $this->smarty->setAllowAmbiguousResources(true);

        $tpl = $this->smarty->createTemplate('foobar.tpl');
        $this->assertFalse($tpl->source->exists);
    }

    public function testCase1()
    {
        $resource_handler = new Smarty_Resource_Ambiguous(dirname(__FILE__) . '/templates/ambiguous/');
        $this->smarty->registerResource('ambiguous', $resource_handler);
        $this->smarty->setDefaultResourceType('ambiguous');
        $this->smarty->setAllowAmbiguousResources(true);

        $resource_handler->setSegment('case1');

        $tpl = $this->smarty->createTemplate('foobar.tpl');
        $this->assertTrue($tpl->source->exists);
        $this->assertEquals('case1', $tpl->source->content);
    }

    public function testCase2()
    {
        $resource_handler = new Smarty_Resource_Ambiguous(dirname(__FILE__) . '/templates/ambiguous/');
        $this->smarty->registerResource('ambiguous', $resource_handler);
        $this->smarty->setDefaultResourceType('ambiguous');
        $this->smarty->setAllowAmbiguousResources(true);

        $resource_handler->setSegment('case2');

        $tpl = $this->smarty->createTemplate('foobar.tpl');
        $this->assertTrue($tpl->source->exists);
        $this->assertEquals('case2', $tpl->source->content);
    }

    public function testCaseSwitching()
    {
        $resource_handler = new Smarty_Resource_Ambiguous(dirname(__FILE__) . '/templates/ambiguous/');
        $this->smarty->registerResource('ambiguous', $resource_handler);
        $this->smarty->setDefaultResourceType('ambiguous');
        $this->smarty->setAllowAmbiguousResources(true);

        $resource_handler->setSegment('case1');
        $tpl = $this->smarty->createTemplate('foobar.tpl');
        $this->assertTrue($tpl->source->exists);
        $this->assertEquals('case1', $tpl->source->content);

        $resource_handler->setSegment('case2');
        $tpl = $this->smarty->createTemplate('foobar.tpl');
        $this->assertTrue($tpl->source->exists);
        $this->assertEquals('case2', $tpl->source->content);
    }
}
