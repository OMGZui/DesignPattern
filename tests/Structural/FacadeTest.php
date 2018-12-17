<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 16:23
 */

namespace Tests\Structural;

use DesignPattern\Structural\Facade\Computer;
use DesignPattern\Structural\Facade\ComputerFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $computer = new ComputerFacade(new Computer());
        $this->assertEquals("Ouch!Beep beep!Loading..Ready to be used!", $computer->turnOn());
        $this->assertEquals("Bup bup bup buzzzz!Haaah!Zzzzz", $computer->turnOff());
    }
}