<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 16:38
 */

namespace Tests\Creational;

use DesignPattern\Creational\AbstractFactory\Carpenter;
use DesignPattern\Creational\AbstractFactory\Door;
use DesignPattern\Creational\AbstractFactory\DoorFittingExpert;
use DesignPattern\Creational\AbstractFactory\IronDoor;
use DesignPattern\Creational\AbstractFactory\IronDoorFactory;
use DesignPattern\Creational\AbstractFactory\Welder;
use DesignPattern\Creational\AbstractFactory\WoodenDoor;
use DesignPattern\Creational\AbstractFactory\WoodenDoorFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    protected $woodenFactory;
    protected $ironFactory;

    protected function setUp()
    {
        parent::setUp();
        $this->woodenFactory = new WoodenDoorFactory();
        $this->ironFactory = new IronDoorFactory();
    }

    // 测试门工厂
    public function testMakeDoor()
    {
        $door = $this->woodenFactory->makeDoor();
        $doorW = new WoodenDoor();
        $this->assertEquals($door->getDescription(), $doorW->getDescription());
        $this->assertInstanceOf(Door::class, $door);
        $this->assertInstanceOf(WoodenDoor::class, $door);

        $door = $this->ironFactory->makeDoor();
        $doorI = new IronDoor();
        $this->assertEquals($door->getDescription(), $doorI->getDescription());
        $this->assertInstanceOf(Door::class, $door);
        $this->assertInstanceOf(IronDoor::class, $door);
    }

    // 测试维修专家工厂
    public function testFittingExpert()
    {
        $expert = $this->woodenFactory->makeFittingExpert();
        $expertC = new Carpenter();
        $this->assertEquals($expert->getDescription(), $expertC->getDescription());
        $this->assertInstanceOf(Carpenter::class, $expert);
        $this->assertInstanceOf(DoorFittingExpert::class, $expert);

        $expert = $this->ironFactory->makeFittingExpert();
        $expertW = new Welder();
        $this->assertEquals($expert->getDescription(), $expertW->getDescription());
        $this->assertInstanceOf(Welder::class, $expert);
        $this->assertInstanceOf(DoorFittingExpert::class, $expert);
    }
}