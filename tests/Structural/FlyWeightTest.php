<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 17:21
 */

namespace Tests\Structural;

use DesignPattern\Structural\FlyWeight\TeaMaker;
use DesignPattern\Structural\FlyWeight\TeaShop;
use PHPUnit\Framework\TestCase;

class FlyWeightTest extends TestCase
{
    public function testFlyWeight()
    {
        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('少糖', 1);
        $shop->takeOrder('多牛奶', 2);
        $shop->takeOrder('不要糖', 5);

        $this->assertEquals("Serving tea to table# 1Serving tea to table# 2Serving tea to table# 5", $shop->serve());
        $this->assertEquals($teaMaker->make('少糖'), $teaMaker->getTeas()['少糖']);
        $this->assertEquals($teaMaker->make('多牛奶'), $teaMaker->getTeas()['多牛奶']);
        $this->assertEquals($teaMaker->make('不要糖'), $teaMaker->getTeas()['不要糖']);

        $this->assertEquals($teaMaker->make('少糖'), $shop->getOrders()[1]);
        $this->assertEquals($teaMaker->make('多牛奶'), $shop->getOrders()[2]);
        $this->assertEquals($teaMaker->make('不要糖'), $shop->getOrders()[5]);
    }
}