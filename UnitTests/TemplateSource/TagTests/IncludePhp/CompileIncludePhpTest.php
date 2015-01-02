<?php
/**
 * Smarty PHPunit tests compilation of the {include_php} tag
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for {include_php} tests
 */
class CompileIncludePhpTest extends PHPUnit_SmartyBC
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        $this->smartyBC->setForceCompile(true);
    }

    /**
     * test include_php string file_name function
     */
    public function testIncludePhpStringFileName()
    {
        $this->smartyBC->disableSecurity();
        $tpl = $this->smartyBC->createTemplate("eval:start {include_php file='scripts/test_include_php.php'} end");
        $result = $this->smartyBC->fetch($tpl);
        $this->assertContains("test include php", $result);
    }

    /**
     * test include_php string file_name function
     */
    public function testIncludePhpVariableFileName()
    {
        $this->smartyBC->disableSecurity();
        $tpl = $this->smartyBC->createTemplate('eval:start {include_php file=$filename once=false} end');
        $tpl->assign('filename', 'scripts/test_include_php.php');
        $result = $this->smartyBC->fetch($tpl);
        $this->assertContains("test include php", $result);
    }

    public function testIncludePhpVariableFileNameShortag()
    {
        $this->smartyBC->disableSecurity();
        $tpl = $this->smartyBC->createTemplate('eval:start {include_php $filename once=false} end');
        $tpl->assign('filename', 'scripts/test_include_php.php');
        $result = $this->smartyBC->fetch($tpl);
        $this->assertContains("test include php", $result);
    }
}
