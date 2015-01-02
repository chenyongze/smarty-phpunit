<?php

/**
 * Created by PhpStorm.
 * User: Uwe Tews
 * Date: 17.12.2014
 * Time: 04:10
 * /**
 * Class PHPUnit_Smarty
 */
class PHPUnit_Smarty extends PHPUnit_Framework_TestCase
{
    /**
     * @var SmartyBC
     */
    public $smartyBC = null;
    /**
     * @var
     */
    public $smartyVersion = '';
    /**
     * @var
     */
    public static $smartySubversion = null;
    /**
     * @var Smarty
     */
    public $smarty = null;
    /**
     * @var string
     */
    public $pathPrefix = '.';
    /**
     * @var bool
     */
    public static $init = true;
    /**
     * @var null
     */
    public static $cwd = null;

    /**
     *
     */
    public static function setUpBeforeClass()
    {
        self::$init = true;
        error_reporting(E_ALL | E_STRICT);
    }

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
        self::$cwd = getcwd();
        $this->smarty = new Smarty;
        if (PHPUnit_Smarty::$init) {
            $this->cleanDir($this->smarty->getCompileDir());
            $this->cleanDir($this->smarty->getCacheDir());
            PHPUnit_Smarty::$init = false;
        }
    }

    public function getVersion()
    {
        if (!isset(self::$smartySubversion)) {
            $file = __DIR__ . '/../../composer/installed.json';
            if (file_exists($file)) {
                $json = file_get_contents($file);
                if (preg_match('#"name": "smarty/smarty",\s+"version": "(.*)?"#', $json, $match)) {
                    if ($match[1] == 'dev-master') {
                        self::$smartySubversion = 999;
                    } else {
                        if (preg_match('#v\d+\.\d+\.(\d+)#', $match[1], $match2)) {
                            self::$smartySubversion = (int) $match2[1];
                        }
                    }
                }
            }
        }
        return self::$smartySubversion;
    }

    /**
     * @param $dir
     */
    public function cleanDir($dir)
    {
        $di = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
        $ri = new RecursiveIteratorIterator($di, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($ri as $file) {
            $file->isDir() ? rmdir($file) : unlink($file);
        }
    }

    public function buildInternalPath($path)
    {
        return realpath(str_replace('/', '\\', $path));
        switch ($GLOBALS['SmartyVersion']) {
            case '3.1.11':
                return self::$cwd . str_replace('/', '\\', $path);
                break;
            default:
                return self::$cwd . str_replace('/', '\\', $path);
                break;
        }
        return self::$cwd . $path;
    }

    /**
     *
     */
    public function clearResourceCache()
    {
        Smarty::$global_tpl_vars = array();
        Smarty::$_smarty_vars = array();
        Smarty_Resource::$sources = array();
        Smarty_Resource::$compileds = array();
        if (isset(SMARTY::$_is_file_cache)) {
            SMARTY::$_is_file_cache = array();
        }
        if (class_exists('Smarty_Resource', false)) {
            if (isset(Smarty_Resource::$sources) && !empty(Smarty_Resource::$sources)) {
                foreach (Smarty_Resource::$sources as $obj) {
                    if (isset($obj->smarty)) {
                        $obj->smarty = null;
                    }
                }
                Smarty_Resource::$sources = array();
            }
            if (isset(Smarty_Resource::$compileds) && !empty(Smarty_Resource::$compileds)) {
                foreach (Smarty_Resource::$compileds as $obj) {
                    if (isset($obj->smarty)) {
                        $obj->smarty = null;
                    }
                }
                Smarty_Resource::$compileds = array();
            }
            if (isset(Smarty_Resource::$resources) && !empty(Smarty_Resource::$resources)) {
                foreach (Smarty_Resource::$resources as $obj) {
                    if (isset($obj->smarty)) {
                        $obj->smarty = null;
                    }
                }
                Smarty_Resource::$resources = array();
            }
        }
        if (class_exists('Smarty_CacheResource', false)) {
            if (isset(Smarty_CacheResource::$resources) && !empty(Smarty_CacheResource::$resources)) {
                foreach (Smarty_CacheResource::$resources as $obj) {
                    if (isset($obj->smarty)) {
                        $obj->smarty = null;
                    }
                }
                Smarty_CacheResource::$resources = array();
            }
        }
    }

    /**
     *
     */
    protected function tearDown()
    {
        if (isset($this->smarty)) {
            $this->smarty->smarty = null;
            unset($this->smarty);
        }
        $this->clearResourceCache();
    }

    /**
     *
     */
    public static function tearDownAfterClass()
    {
        //Smarty::$_resource_cache = array();
    }
}
