<?php
/**
 * Smarty PHPunit tests assignByRef method
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for assignByRef tests
 */
class AssignByRefBCTest extends PHPUnit_SmartyBC
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test Smarty2 assign_By_Ref
     */
    public function testSmarty2AssignByRef()
    {
        $bar = 'bar';
        $this->smartyBC->assign_by_ref('foo', $bar);
        $bar = 'newbar';
        $this->assertEquals('newbar', $this->smartyBC->fetch('eval:{$foo}'));
    }

    /**
     * test Smarty2's behaviour of assign_By_Ref (Issue 88)
     */
    public function testSmarty2AssignByRef2()
    {
        $bar = 'bar';
        $this->smartyBC->assign_by_ref('foo', $bar);
        $this->smartyBC->fetch('eval:{$foo = "newbar"}');
        $this->assertEquals('newbar', $bar);
    }
}
