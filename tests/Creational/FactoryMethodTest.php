<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 15:59
 */

namespace Tests\Creational;

use DesignPattern\Creational\FactoryMethod\CommunityExecutive;
use DesignPattern\Creational\FactoryMethod\Developer;
use DesignPattern\Creational\FactoryMethod\DevelopmentManager;
use DesignPattern\Creational\FactoryMethod\MarketingManager;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testMakeInterviewer()
    {
        // 测试开发工厂
        $devM = new DevelopmentManager();
        $devE = new Developer();
        $this->assertEquals($devM->takeInterview(), $devE->askQuestions());

        // 测试市场工厂
        $marketM = new MarketingManager();
        $marketE = new CommunityExecutive();
        $this->assertEquals($marketM->takeInterview(), $marketE->askQuestions());
    }
}