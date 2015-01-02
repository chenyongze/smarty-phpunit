<?php
/**
 * Created by PhpStorm.
 * User: Uwe Tews
 * Date: 17.12.2014
 * Time: 04:10
 * */

/**
 * Class PHPUnit_SmartyDB
 */
class PHPUnit_SmartyDB extends PHPunit_Smarty
{
    // only instantiate pdo once for test clean-up/fixture load
    /**
     * @var null
     */
    static private $pdo = null;

    /**
     * @return null|PDO
     */
    final public function getPDO()
    {
        if (self::$pdo == null) {
            self::$pdo = new PDO($GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD']);
        }

        return self::$pdo;
    }
}
