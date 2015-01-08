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

    /**
     * @param null $dir
     */
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
        if (!is_dir($dir . '/configs')) {
            mkdir($dir . '/configs');
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

    /**
     * @return int|null
     */
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

    /**
     * @param $in
     *
     * @return mixed
     */
    public function cleanNewline($in)
    {
        if (is_string($in)) {
            return str_replace(array("\r", "\t"), array('', '    '), $in);
        } else {
            return $in;
        }
    }

    /**
     * @param      $tpl
     * @param null $name
     * @param null $type
     * @param null $dir
     *
     * @return mixed
     * @throws \Exception
     */
    public function buildSourcePath($tpl, $name = null, $type = null, $dir = null)
    {
        $name = isset($name) ? $name : $tpl->source->name;
        $type = isset($type) ? $type : $tpl->source->type;
        $dir = isset($dir) ? $dir : $this->smarty->getTemplateDir(0);
        switch ($type) {
            case 'file':
                return $this->normalizePath($dir . $name, true);
            default:
                throw new Exception("Unhandled source resource type '{$type}'");
        }
    }

    /**
     * @param      $tpl
     * @param null $value
     * @param null $type
     *
     * @return string
     * @throws \Exception
     */
    public function buildUid($tpl, $value = null, $type = null)
    {
        $type = isset($type) ? $type : $tpl->source->type;
        switch ($type) {
            case 'file':
                if ($this->getVersion() >= 22) {
                    return sha1(getcwd() . $value);
                }
                return sha1($value);
            default:
                throw new Exception("Unhandled source resource type '{$type}'");
        }
    }

    /**
     * @param      $path
     * @param bool $ds
     *
     * @return mixed
     */
    public function normalizePath($path, $ds = false)
    {
        $path = str_replace(array('\\', '/./'), '/', $path);
        while ($path !== $new = preg_replace('#[^\.\/]+/\.\./#', '', $path)) {
            $path = $new;
        }
        if (DS !== '/' && $ds) {
            $path = str_replace('/', DS, $path);
        }
        return $path;
    }

    /**
     * @param      $tpl
     * @param null $name
     * @param null $type
     *
     * @return null|string
     */
    public function getBasename($tpl, $name = null, $type = null)
    {
        $name = isset($name) ? $name : $tpl->source->name;
        $type = isset($type) ? $type : $tpl->source->type;
        switch ('$type') {
            case 'file':
                if (($_pos = strpos($name, ']')) !== false) {
                    $name = substr($name, $_pos + 1);
                }
                return basename($name);
            default:
                return null;
        }
    }

    /**
     * @param      $tpl
     * @param bool $sub
     * @param bool $caching
     * @param null $compile_id
     * @param null $name
     * @param null $type
     * @param null $dir
     *
     * @return string
     * @throws \Exception
     */
    public function buildCompiledPath($tpl, $sub = true, $caching = false, $compile_id = null, $name = null, $type = null, $dir = null)
    {
        if ($v = $this->getVersion() > 99) {
            $sep = DS;
        } else {
            $sep = DS;
        }
        $_compile_id = isset($compile_id) ? preg_replace('![^\w\|]+!', '_', $compile_id) : null;
        $sp = $this->buildSourcePath($tpl, $name, $type, $dir);
        $uid = $this->buildUid($tpl, $sp, $type);
        $_filepath = $uid;
        // if use_sub_dirs, break file into directories
        if ($sub) {
            $_filepath = substr($_filepath, 0, 2) . $sep
                . substr($_filepath, 2, 2) . $sep
                . substr($_filepath, 4, 2) . $sep
                . $_filepath;
        }
        $_compile_dir_sep = $sub ? $sep : '^';
        if (isset($_compile_id)) {
            $_filepath = $_compile_id . $_compile_dir_sep . $_filepath;
        }
        // caching token
        if ($caching) {
            $_cache = '.cache';
        } else {
            $_cache = '';
        }
        $_compile_dir = $tpl->smarty->getCompileDir();
        // set basename if not specified
        $_basename = $this->getBasename($tpl, $name, $type);
        if ($_basename === null) {
            $_basename = basename(preg_replace('![^\w\/]+!', '_', $name));
        }
        // separate (optional) basename by dot
        if ($_basename) {
            $_basename = '.' . $_basename;
        }

        return $_compile_dir . $_filepath . '.' . $type . $_basename . $_cache . '.php';
    }

    /**
     * @param      $tpl
     * @param bool $sub
     * @param null $cache_id
     * @param null $compile_id
     * @param null $name
     * @param null $type
     * @param null $dir
     * @param null $cacheType
     *
     * @return string
     * @throws \Exception
     */
    public function buildCachedPath($tpl, $sub = true, $cache_id = null, $compile_id = null, $name = null, $type = null, $dir = null, $cacheType = null)
    {
        $cacheType = isset($cacheType) ? $cacheType : $tpl->smarty->caching_type;
        switch ($cacheType) {
            case 'file':
                if ($v = $this->getVersion() > 99) {
                    $sep = DS;
                } else {
                    $sep = DS;
                }
                $_compile_id = isset($compile_id) ? preg_replace('![^\w\|]+!', '_', $compile_id) : null;
                $_cache_id = isset($cache_id) ? preg_replace('![^\w\|]+!', '_', $cache_id) : null;
                $sp = $this->buildSourcePath($tpl, $name, $type, $dir);
                $uid = $this->buildUid($tpl, $sp, $type);
                $_filepath = $uid;
                // if use_sub_dirs, break file into directories
                if ($sub) {
                    $_filepath = substr($_filepath, 0, 2) . $sep
                        . substr($_filepath, 2, 2) . $sep
                        . substr($_filepath, 4, 2) . $sep
                        . $_filepath;
                }
                $_compile_dir_sep = $sub ? $sep : '^';
                if (isset($_cache_id)) {
                    $_cache_id = str_replace('|', $_compile_dir_sep, $_cache_id) . $_compile_dir_sep;
                } else {
                    $_cache_id = '';
                }
                if (isset($_compile_id)) {
                    $_compile_id = $_compile_id . $_compile_dir_sep;
                } else {
                    $_compile_id = '';
                }
                $_cache_dir = $tpl->smarty->getCacheDir();
                return $_cache_dir . $_cache_id . $_compile_id . $_filepath . '.' . basename($sp) . '.php';
            case 'mysqltest':
            case 'pdo':
            case 'foobar':
                $sp = $this->buildSourcePath($tpl, $name, $type, $dir);
                $_compile_id = isset($compile_id) ? preg_replace('![^\w\|]+!', '_', $compile_id) : null;
                $_cache_id = isset($cache_id) ? preg_replace('![^\w\|]+!', '_', $cache_id) : null;
                return sha1($sp . $_cache_id . $_compile_id);
            default:
                throw new Exception("Unhandled cache resource type '{$cacheType}'");
        }
    }

    /**
     *
     */
    public function clearResourceCache()
    {
        Smarty::$global_tpl_vars = array();
        Smarty::$_smarty_vars = array();
        Smarty::$_muted_directories = array();
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
        $this->clearResourceCache();
        if (isset($this->smarty)) {
            $this->smarty->smarty = null;
            $this->smarty = null;
        }
    }

    /**
     *
     */
    public static function tearDownAfterClass()
    {
        //Smarty::$_resource_cache = array();
    }
}
