<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 10:29
 */

namespace Tests\Structural;

use DesignPattern\Structural\Proxy\LabDoor;
use DesignPattern\Structural\Proxy\SecuredDoor;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxy()
    {
        $door = new LabDoor();
        $securedDoor = new SecuredDoor($door);

        $this->assertEquals($door->close(), $securedDoor->close());
        $this->assertEquals($door->open(), $securedDoor->open('123456'));
        $this->assertEquals("你是谁", $securedDoor->open());
    }
}