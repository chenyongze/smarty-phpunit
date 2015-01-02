<?php
/**
 * Smarty PHPunit tests for configuration['escapeHtml'] property
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for configuration['escapeHtml'] property tests
 */
class AutoEscapeTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        $this->smarty->setEscapeHtml(true);
    }

    /**
     * test configuration['escapeHtml'] property
     */
    public function testAutoEscape()
    {
        $tpl = $this->smarty->createTemplate('eval:{$foo}');
        $tpl->assign('foo', '<a@b.c>');
        $this->assertEquals("&lt;a@b.c&gt;", $this->smarty->fetch($tpl));
    }
}
