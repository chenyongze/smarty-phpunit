<?php
/**
 * Smarty PHPunit tests clearing assigned variables
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for clearing assigned variables tests
 */
class ClearAssignBCTest extends PHPUnit_SmartyBC
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);

        $this->smartyBC->assign('foo', 'foo');
        $this->smartyBC->assign('bar', 'bar');
        $this->smartyBC->assign('blar', 'blar');
    }

    public function testSmarty2ClearAssign()
    {
        $this->smartyBC->setErrorReporting(error_reporting() & ~(E_NOTICE | E_USER_NOTICE));
        $this->smartyBC->clear_assign('blar');
        $this->assertEquals('foobar', $this->smartyBC->fetch('eval:{$foo}{$bar}{$blar}'));
    }

    public function testSmarty2ArrayClearAssign()
    {
        $this->smartyBC->setErrorReporting(error_reporting() & ~(E_NOTICE | E_USER_NOTICE));
        $this->smartyBC->clear_assign(array('blar', 'foo'));
        $this->assertEquals('bar', $this->smartyBC->fetch('eval:{$foo}{$bar}{$blar}'));
    }
}
