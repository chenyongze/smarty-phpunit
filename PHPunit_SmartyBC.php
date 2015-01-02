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
        if (isset($this->smartyBC)) {
            $this->smartyBC->smarty = null;
            unset($this->smartyBC);
        }
        $this->clearResourceCache();
    }
}

