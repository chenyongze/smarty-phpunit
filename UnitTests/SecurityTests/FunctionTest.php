<?php
/**
 * Smarty PHPunit tests of function calls
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for function tests
 */
class FunctionTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test unknown function error
     */
    public function testUnknownFunction()
    {
        $this->smarty->enableSecurity();
        try {
            $this->smarty->fetch('eval:{unknown()}');
        }
        catch (Exception $e) {
            $this->assertContains("PHP function 'unknown' not allowed by security setting", $e->getMessage());

            return;
        }
        $this->fail('Exception for unknown function has not been raised.');
    }
}
