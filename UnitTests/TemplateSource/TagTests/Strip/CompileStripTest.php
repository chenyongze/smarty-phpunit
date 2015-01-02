<?php
/**
 * Smarty PHPunit tests compilation of strip tags
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for strip tags tests
 */
class CompileStripTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test strip tag
     */
    public function testStrip()
    {
        $tpl = $this->smarty->createTemplate("eval:{strip}<table>\n </table>{/strip}");
        $this->assertEquals('<table></table>', $this->smarty->fetch($tpl));
    }
}
