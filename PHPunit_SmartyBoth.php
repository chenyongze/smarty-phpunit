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
        if (isset($this->smartyBC)) {
            $this->smartyBC->smarty = null;
            unset($this->smartyBC);
        }
        if (isset($this->smarty)) {
            $this->smarty->smarty = null;
            unset($this->smarty);
        }
        $this->clearResourceCache();
    }
}
