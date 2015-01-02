<?php
/**
 * Smarty PHPunit tests for templateExists method
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for templateExists tests
 */
class TemplateExistsTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test $smarty->templateExists true
     */
    public function testSmartyTemplateExists()
    {
        $this->assertTrue($this->smarty->templateExists('helloworld.tpl'));
    }

    /**
     * test $smarty->templateExists false
     */
    public function testSmartyTemplateNotExists()
    {
        $this->assertFalse($this->smarty->templateExists('notthere.tpl'));
    }
}
