<?php
/**
 * Smarty PHPunit tests compilation of compiler plugins
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

/**
 * class for compiler plugin tests
 */
class CompileCompilerPluginTest extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        $this->smarty->setForceCompile(true);
    }

    /**
     * test compiler plugin tag in template file
     */
    public function testCompilerPluginFromTemplateFile()
    {
        $this->smarty->registerPlugin(Smarty::PLUGIN_COMPILER, 'compilerplugin', 'mycompilerplugin');
        $tpl = $this->smarty->createTemplate('compilerplugintest.tpl');
        $this->assertEquals("Hello World", $this->smarty->fetch($tpl));
    }

    /**
     * test compiler plugin tag in compiled template file
     */
    public function testCompilerPluginFromCompiledTemplateFile()
    {
        $this->smarty->setForceCompile(false);
        $this->smarty->registerPlugin(Smarty::PLUGIN_COMPILER, 'compilerplugin', 'mycompilerplugin');
        $tpl = $this->smarty->createTemplate('compilerplugintest.tpl');
        $this->assertEquals("Hello World", $this->smarty->fetch($tpl));
    }
}

function mycompilerplugin($params, $compiler)
{
    return '<?php echo \'Hello World\';?>';
}
