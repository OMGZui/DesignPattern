<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 15:47
 */

namespace Tests\Structural;

use DesignPattern\Structural\Decorator\MilkCoffee;
use DesignPattern\Structural\Decorator\SimpleCoffee;
use DesignPattern\Structural\Decorator\VanillaCoffee;
use DesignPattern\Structural\Decorator\WhipCoffee;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $coffee = new SimpleCoffee();
        $this->assertEquals(10, $coffee->getCost());
        $coffee = new MilkCoffee($coffee);
        $this->assertEquals(12, $coffee->getCost());
        $coffee = new WhipCoffee($coffee);
        $this->assertEquals(17, $coffee->getCost());
        $coffee = new VanillaCoffee($coffee);
        $this->assertEquals(20, $coffee->getCost());
    }
}