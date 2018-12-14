<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 11:15
 */

namespace Tests\Creational;

use DesignPattern\Creational\Builder\BadBurger;
use DesignPattern\Creational\Builder\BurgerBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    const SIZE = 14;

    public function testBuilder()
    {
        $burgerGood = (new BurgerBuilder(self::SIZE))
            ->addCheese()
            ->addPepperoni()
            ->addLettuce()
            ->addTomato()
            ->build();
        $burgerBad = new BadBurger(self::SIZE);
        $this->assertEquals($burgerGood->get('lettuce'), $burgerBad->get('lettuce'));
        $this->assertEquals($burgerGood->get('cheese'), $burgerBad->get('cheese'));
        $this->assertEquals($burgerGood->get('tomato'), $burgerBad->get('tomato'));
        $this->assertEquals($burgerGood->get('pepperoni'), $burgerBad->get('pepperoni'));
        $this->assertEquals($burgerGood->get('size'), $burgerBad->get('size'));
    }
}