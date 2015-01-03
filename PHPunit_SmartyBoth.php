<?php
/**
 * Created by PhpStorm.
 * User: Uwe Tews
 * Date: 17.12.2014
 * Time: 04:10
 * */

/**
 * Class PHPUnit_SmartyBoth
 */
class PHPUnit_SmartyBoth extends PHPUnit_Smarty
{
    public function setUp($dir = null)
    {
        if (!is_dir($dir . '/templates_c')) {
            mkdir($dir . '/templates_c');
        }
        if (!is_dir($dir . '/templates')) {
            mkdir($dir . '/templates');
        }
        if (!is_dir($dir . '/cache')) {
            mkdir($dir . '/cache');
        }
        if (!is_dir($dir . '/config')) {
            mkdir($dir . '/config');
        }
        chdir($dir);
        $this->smarty = new Smarty;
        $this->smartyBC = new SmartyBC;
        if (PHPUnit_Smarty::$init) {
            $this->cleanDir($this->smarty->getCompileDir());
            $this->cleanDir($this->smarty->getCacheDir());
            $this->cleanDir($this->smartyBC->getCompileDir());
            $this->cleanDir($this->smartyBC->getCacheDir());
            PHPUnit_Smarty::$init = false;
        }
    }

    /**
     *
     */
    protected function tearDown()
    {
        $this->clearResourceCache();
        if (isset($this->smartyBC)) {
            $this->smartyBC->smarty = null;
            $this->smartyBC = null;
        }
        if (isset($this->smarty)) {
            $this->smarty->smarty = null;
            $this->smarty = null;
        }
    }
}
