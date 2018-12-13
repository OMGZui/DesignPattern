<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 14:58
 */

namespace Tests\Creational;

use DesignPattern\Creational\SimpleFactory\DoorFactory;
use DesignPattern\Creational\SimpleFactory\WoodenDoor;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    const WIDTH = 2;
    const HEIGHT = 1;

    public function testMakeDoor()
    {
        $door = DoorFactory::makeDoor(self::WIDTH, self::HEIGHT);
        $doorW = new WoodenDoor(self::WIDTH, self::HEIGHT);

        $this->assertEquals($doorW, $door);
        $this->assertEquals($doorW->getHeight(), $door->getHeight());
        $this->assertEquals($doorW->getWidth(), $door->getWidth());
    }
}