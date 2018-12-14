<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 14:54
 */

namespace DesignPattern\Creational\Singleton;

final class President
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}