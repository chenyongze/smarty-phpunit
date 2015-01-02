<?php
/**
 * Smarty PHPunit tests appendByRef method
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for appendByRef tests
 */
class LiteralTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /*
    *  Test literal tag
    */
    public function testLiteralTag()
    {
        $tpl = $this->smarty->createTemplate("eval:{literal} {\$foo} {/literal}");
        $this->assertEquals(' {$foo} ', $this->smarty->fetch($tpl));
    }

    /*
    *  Test auto literal space
    */
    public function testAutoLiteralSpace()
    {
        $tpl = $this->smarty->createTemplate("eval: { \$foo} ");
        $tpl->assign('foo', 'literal');
        $this->assertEquals(' { $foo} ', $this->smarty->fetch($tpl));
    }

    /*
    *  Test auto literal line break
    */
    public function testAutoLiteralLineBreak()
    {
        $tpl = $this->smarty->createTemplate("eval: {\n\$foo} ");
        $tpl->assign('foo', 'literal');
        $this->assertEquals(" {\n\$foo} ", $this->smarty->fetch($tpl));
    }

    /*
    *  Test auto literal disabled
    */
    public function testAutoLiteralDisabled()
    {
        $this->smarty->setAutoLiteral(false);
        $tpl = $this->smarty->createTemplate("eval: { \$foo} ");
        $tpl->assign('foo', 'literal');
        $this->assertEquals(' literal ', $this->smarty->fetch($tpl));
    }
}
