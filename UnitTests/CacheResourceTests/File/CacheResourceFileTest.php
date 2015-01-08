<?php
/**
 * Smarty PHPunit tests for cache resource file
 *
 * @package PHPunit
 * @author  Uwe Tews
 */

include_once __DIR__ . '/../CacheResourceTestCommon.php';

/**
 * class for cache resource file tests
 */
class CacheResourceFileTest extends CacheResourceTestCommon
{
    public function setUp($dir = null)
    {
        parent::setUp(__DIR__);
    }

    protected function relative($path)
    {
             $path = str_replace('\\', '/', $path);
         return $path;
    }

    /**
     * test getCachedFilepath with configuration['useSubDirs'] enabled
     */
    public function testGetCachedFilepathSubDirs()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $tpl = $this->smarty->createTemplate('helloworld.tpl');
        $this->assertEquals($this->buildCachedPath($tpl, true, null, null, 'helloworld.tpl', $type = 'file', $this->smarty->getTemplateDir(0), 'file')
            , $tpl->cached->filepath);
    }

    /**
     * test getCachedFilepath with cache_id
     */
    public function testGetCachedFilepathCacheId()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar');
        $this->assertEquals($this->buildCachedPath($tpl, true, 'foo|bar', null, 'helloworld.tpl', $type = 'file', $this->smarty->getTemplateDir(0), 'file')
            , $tpl->cached->filepath);
    }

    /**
     * test getCachedFilepath with compile_id
     */
    public function testGetCachedFilepathCompileId()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $tpl = $this->smarty->createTemplate('helloworld.tpl', null, 'blar');
        $this->assertEquals($this->buildCachedPath($tpl, true, null, 'blar', 'helloworld.tpl', $type = 'file', $this->smarty->getTemplateDir(0), 'file')
            , $tpl->cached->filepath);
    }

    /**
     * test getCachedFilepath with cache_id and compile_id
     */
    public function testGetCachedFilepathCacheIdCompileId()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $this->assertEquals($this->buildCachedPath($tpl, true, 'foo|bar', 'blar', 'helloworld.tpl', $type = 'file', $this->smarty->getTemplateDir(0), 'file')
            , $tpl->cached->filepath);
    }

    /**
     * test cache->clear_all with cache_id and compile_id
     */
    public function testClearCacheAllCacheIdCompileId()
    {
        $this->smarty->clearAllCache();
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertEquals(1, $this->smarty->clearAllCache());
    }

    /**
     * test cache->clear with cache_id and compile_id
     */
    public function testClearCacheCacheIdCompileId()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->clearAllCache();
        $this->smarty->setUseSubDirs(false);
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar2', 'blar');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(2, $this->smarty->clearCache(null, 'foo|bar'));
        $this->assertFalse(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertFalse(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId2()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(false);
        $this->smarty->clearAllCache();
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar2', 'blar');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(2, $this->smarty->clearCache('helloworld.tpl'));
        $this->assertFalse(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId2Sub()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $this->smarty->clearAllCache();
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar2', 'blar');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(2, $this->smarty->clearCache('helloworld.tpl'));
        $this->assertFalse(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId3()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->clearAllCache();
        $this->smarty->setUseSubDirs(false);
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar2');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(1, $this->smarty->clearCache('helloworld.tpl', null, 'blar2'));
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId3Sub()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->clearAllCache();
        $this->smarty->setUseSubDirs(true);
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar2');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(1, $this->smarty->clearCache('helloworld.tpl', null, 'blar2'));
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId4()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(false);
        $this->smarty->clearAllCache();
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar2');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(1, $this->smarty->clearCache('helloworld.tpl', null, 'blar2'));
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId4Sub()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $this->smarty->clearAllCache();
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar2');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(1, $this->smarty->clearCache('helloworld.tpl', null, 'blar2'));
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId5()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(false);
        $this->smarty->clearAllCache();
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar2');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(2, $this->smarty->clearCache(null, null, 'blar'));
        $this->assertFalse(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertFalse(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheIdCompileId5Sub()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $this->cleanDir($this->smarty->getCacheDir());
        $tpl = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', 'foo|bar', 'blar2');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld2.tpl', 'foo|bar', 'blar');
        $tpl3->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertEquals(2, $this->smarty->clearCache(null, null, 'blar'));
        $this->assertFalse(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertFalse(file_exists($tpl3->cached->filepath));
    }

    public function testClearCacheCacheFile()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(false);
        $this->cleanDir($this->smarty->getCacheDir());
        $tpl = $this->smarty->createTemplate('helloworld.tpl');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', null, 'bar');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld.tpl', 'buh|blar');
        $tpl3->writeCachedContent('hello world');
        $tpl4 = $this->smarty->createTemplate('helloworld2.tpl');
        $tpl4->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertTrue(file_exists($tpl4->cached->filepath));
        $this->assertEquals(3, $this->smarty->clearCache('helloworld.tpl'));
        $this->assertFalse(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertFalse(file_exists($tpl3->cached->filepath));
        $this->assertTrue(file_exists($tpl4->cached->filepath));
    }

    public function testClearCacheCacheFileSub()
    {
        $this->smarty->caching = true;
        $this->smarty->cache_lifetime = 1000;
        $this->smarty->setUseSubDirs(true);
        $this->cleanDir($this->smarty->getCacheDir());
        $tpl = $this->smarty->createTemplate('helloworld.tpl');
        $tpl->writeCachedContent('hello world');
        $tpl2 = $this->smarty->createTemplate('helloworld.tpl', null, 'bar');
        $tpl2->writeCachedContent('hello world');
        $tpl3 = $this->smarty->createTemplate('helloworld.tpl', 'buh|blar');
        $tpl3->writeCachedContent('hello world');
        $tpl4 = $this->smarty->createTemplate('helloworld2.tpl');
        $tpl4->writeCachedContent('hello world');
        $this->assertTrue(file_exists($tpl->cached->filepath));
        $this->assertTrue(file_exists($tpl2->cached->filepath));
        $this->assertTrue(file_exists($tpl3->cached->filepath));
        $this->assertTrue(file_exists($tpl4->cached->filepath));
        $this->assertEquals(3, $this->smarty->clearCache('helloworld.tpl'));
        $this->assertFalse(file_exists($tpl->cached->filepath));
        $this->assertFalse(file_exists($tpl2->cached->filepath));
        $this->assertFalse(file_exists($tpl3->cached->filepath));
        $this->assertTrue(file_exists($tpl4->cached->filepath));
    }

    /**
     * test cache->clear_all method
     */
    public function testClearCacheAll()
    {
        $this->cleanDir($this->smarty->getCacheDir());
        Smarty_Internal_Write_File::writeFile($this->smarty->getCacheDir() . 'dummy.php', 'test', $this->smarty);
        $this->assertEquals(1, $this->smarty->clearAllCache());
    }

    /**
     * test cache->clear_all method not expired
     */
    public function testClearCacheAllNotExpired()
    {
        $this->cleanDir($this->smarty->getCacheDir());
        file_put_contents($this->smarty->getCacheDir() . 'dummy.php', 'test');
        touch($this->smarty->getCacheDir() . 'dummy.php', time() - 1000);
        $this->assertEquals(0, $this->smarty->clearAllCache(2000));
    }

    /**
     * test cache->clear_all method expired
     */
    public function testClearCacheAllExpired()
    {
        $this->cleanDir($this->smarty->getCacheDir());
        Smarty_Internal_Write_File::writeFile($this->smarty->getCacheDir() . 'dummy.php', 'test', $this->smarty);
        touch($this->smarty->getCacheDir() . 'dummy.php', time() - 1000);
        $this->assertEquals(1, $this->smarty->clearAllCache(500));
    }
}
