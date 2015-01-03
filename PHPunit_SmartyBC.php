<?php
/**
 * Created by PhpStorm.
 * User: Uwe Tews
 * Date: 17.12.2014
 * Time: 04:10
 * /**
 * Class PHPUnit_Smarty
 */

/**
 * Class PHPUnit_SmartyBC
 */
class PHPUnit_SmartyBC extends PHPunit_Smarty
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
        $this->smartyBC = new SmartyBC;
        if (PHPUnit_Smarty::$init) {
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

    }
}

