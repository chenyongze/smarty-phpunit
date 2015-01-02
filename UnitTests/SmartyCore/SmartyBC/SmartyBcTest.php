<?php
/**
 * Smarty PHPunit tests SmartyBC code
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class SmartyBC class tests
 */
class SmartyBcTest extends PHPUnit_SmartyBC
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    /**
     * test {php} tag
     */
    public function testSmartyPhpTag()
    {
        $this->assertEquals('hello world', $this->smartyBC->fetch('eval:{php} echo "hello world"; {/php}'));
    }
}
