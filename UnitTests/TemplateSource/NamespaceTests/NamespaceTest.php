<?php
/**
 * Smarty PHPunit tests static class access to constants, variables and methodes
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for static class access to constants, variables and methodes tests
 */
class NamespaceTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        if ($this->getVersion() < 22) {
            $this->markTestSkipped();
        }
        require_once __DIR__ . '/helpers/namespaced_class.php';
    }

    public function testConstant()
    {
        $tpl = $this->smarty->createTemplate('eval:{foo\bar\FOO}');
        $this->assertEquals("CONSTANT", $tpl->fetch());
    }

    public function testFunction()
    {
        $tpl = $this->smarty->createTemplate('eval:{$t = foo\bar\foo()}{$t}');
        $this->assertEquals("FUNCTION", $tpl->fetch());
    }

    public function testClassConstant()
    {
        $tpl = $this->smarty->createTemplate('eval:{foo\bar\Baz::FOO}');
        $this->assertEquals("CONSTANT", $tpl->fetch());
    }

    public function testClassStatic()
    {
        $tpl = $this->smarty->createTemplate('eval:{foo\bar\Baz::$FOO}');
        $this->assertEquals("STATIC", $tpl->fetch());
    }

    public function testClassFunction()
    {
        $tpl = $this->smarty->createTemplate('eval:{foo\bar\Baz::foo()}');
        $this->assertEquals("FUNCTION", $tpl->fetch());
    }

    public function testInstanceof1()
    {
        $tpl = $this->smarty->createTemplate('eval:{if $object instanceof foo\bar\Baz}yeah!{/if}');
        $class = 'foo\bar\Baz';
        $tpl->assign('object', new $class());
        $this->assertEquals("yeah!", $tpl->fetch());
    }

    public function testInstanceof2()
    {
        $tpl = $this->smarty->createTemplate('eval:{$c = \'foo\bar\Baz\'}{if $object instanceof $c}yeah!{/if}');
        $class = 'foo\bar\Baz';
        $tpl->assign('object', new $class());
        $this->assertEquals("yeah!", $tpl->fetch());
    }

    public function testInstanceof3()
    {
        $tpl = $this->smarty->createTemplate('eval:{if $object instanceof $object2}yeah!{/if}');
        $class = 'foo\bar\Baz';
        $tpl->assign('object', new $class());
        $tpl->assign('object2', new $class());
        $this->assertEquals("yeah!", $tpl->fetch());
    }
}
