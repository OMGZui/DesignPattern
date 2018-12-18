<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:53
 */

namespace Tests\Behavioral;

use DesignPattern\Behavioral\Command\Bulb;
use DesignPattern\Behavioral\Command\Off;
use DesignPattern\Behavioral\Command\On;
use DesignPattern\Behavioral\Command\RemoteControl;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $bulb = new Bulb();
        $on = new On($bulb);
        $off = new Off($bulb);
        $remote = new RemoteControl();

        $this->assertEquals($on->exec(), $remote->submit($on));
        $this->assertEquals($off->exec(), $remote->submit($off));
    }
}