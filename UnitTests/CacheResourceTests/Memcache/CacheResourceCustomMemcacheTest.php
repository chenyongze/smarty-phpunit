<?php
/**
 * Smarty PHPunit tests for cache resource file
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

include_once 'UnitTests/CacheResourceTests/CacheResourceTestCommon.php';

/**
 * class for cache resource file tests
 */
class CacheResourceCustomMemcacheTest extends CacheResourceTestCommon
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
        if (!class_exists('Memcache')) {
            $this->markTestSkipped();
        }
        $this->smarty->setCachingType('memcachetest');
        $this->smarty->addPluginsDir(SMARTY_DIR . '../demo/plugins/');
        $this->smarty->addPluginsDir('./PHPunitplugins');
   }

    protected function doClearCacheAssertion($a, $b)
    {
        $this->assertEquals(- 1, $b);
    }

    public function testGetCachedFilepathSubDirs()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $tpl = $this->smarty->createTemplate('helloworld.tpl');
        $sha1 = $tpl->source->uid . '#helloworld_tpl##';
        $this->assertEquals($sha1, $tpl->cached->filepath);
    }

    /**
     * test getCachedFilepath with cache_id
     */
    public function testGetCachedFilepathCacheId()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar');
        $sha1 = $tpl->source->uid . '#helloworld_tpl#foo|bar#';
        $this->assertEquals($sha1, $tpl->cached->filepath);
    }

    /**
     * test getCachedFilepath with compile_id
     */
    public function testGetCachedFilepathCompileId()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $tpl = $this->smarty->createTemplate('helloworld.tpl', null, 'blar');
        $sha1 = $tpl->source->uid . '#helloworld_tpl##blar';
        $this->assertEquals($sha1, $tpl->cached->filepath);
    }

    /**
     * test getCachedFilepath with cache_id and compile_id
     */
    public function testGetCachedFilepathCacheIdCompileId()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $sha1 = $tpl->source->uid . '#helloworld_tpl#foo|bar#blar';
        $this->assertEquals($sha1, $tpl->cached->filepath);
    }
}
