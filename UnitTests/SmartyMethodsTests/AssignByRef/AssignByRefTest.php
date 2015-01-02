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
class AssignByRefTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test simple assignByRef
     */
    public function testSimpleAssignByRef()
    {
        $bar = 'bar';
        $this->smarty->assignByRef('foo', $bar);
        $bar = 'newbar';
        $this->assertEquals('newbar', $this->smarty->fetch('eval:{$foo}'));
    }
}
