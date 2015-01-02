<?php

/**
 * Smarty PHPunit tests of constants
 *
 * @package PHPunit
 * @author  Uwe Tews
 */
Class TestConst
{
    const CONSTVAL = 'okay';
}

/**
 * class for constants tests
 */
class ConstantsTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test constants
     */
    public function testConstants()
    {
        define('MYCONSTANTS', 'hello world');
        $tpl = $this->smarty->createTemplate('eval:{$smarty.const.MYCONSTANTS}');
        $this->assertEquals("hello world", $this->smarty->fetch($tpl));
    }

    public function testConstants2()
    {
        if ($this->getVersion() < 12) {
            $this->markTestSkipped();
        }
        $tpl = $this->smarty->createTemplate('eval:{MYCONSTANTS}');
        $this->assertEquals("hello world", $this->smarty->fetch($tpl));
    }

    public function testConstants3()
    {
        if ($this->getVersion() < 12) {
            $this->markTestSkipped();
        }
        $tpl = $this->smarty->createTemplate('eval:{$x=MYCONSTANTS}{$x}');
        $this->assertEquals("hello world", $this->smarty->fetch($tpl));
    }

    public function testConstants4()
    {
        if ($this->getVersion() < 22) {
            $this->markTestSkipped();
        }
        $tpl = $this->smarty->createTemplate('eval:{TestConst::CONSTVAL}');
        $this->assertEquals("okay", $this->smarty->fetch($tpl));
    }

    public function testConstants5()
    {
        if ($this->getVersion() < 22) {
            $this->markTestSkipped();
        }
        $tpl = $this->smarty->createTemplate('eval:{if TestConst::CONSTVAL == "okay"}yes{/if}');
        $this->assertEquals("yes", $this->smarty->fetch($tpl));
    }

    public function testConstants6()
    {
        if ($this->getVersion() < 22) {
            $this->markTestSkipped();
        }
        $tpl = $this->smarty->createTemplate('eval:{$obj::CONSTVAL}');
        $tpl->assign('obj', new TestConst());
        $this->assertEquals("okay", $this->smarty->fetch($tpl));
    }

    public function testConstants7()
    {
        if ($this->getVersion() < 22) {
            $this->markTestSkipped();
        }
        $tpl = $this->smarty->createTemplate('eval:{if $obj::CONSTVAL == "okay"}yes{/if}');
        $tpl->assign('obj', new TestConst());
        $this->assertEquals("yes", $this->smarty->fetch($tpl));
    }
}
