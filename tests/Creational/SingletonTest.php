<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 14:57
 */

namespace Tests\Creational;

use DesignPattern\Creational\Singleton\President;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $president1 = President::getInstance();
        $president2 = President::getInstance();

        $this->assertEquals($president1, $president2);
    }
}