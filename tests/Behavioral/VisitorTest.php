<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:53
 */

namespace Tests\Behavioral;

use DesignPattern\Behavioral\Visitor\Jump;
use DesignPattern\Behavioral\Visitor\Lion;
use DesignPattern\Behavioral\Visitor\Monkey;
use DesignPattern\Behavioral\Visitor\Speak;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testSpeak()
    {
        $monkey = new Monkey();
        $lion = new Lion();
        $speak = new Speak();

        $monkey->accept($speak);
        $this->expectOutputString("Ooh oo aa aa!");

        $lion->accept($speak);
        $this->expectOutputString("Ooh oo aa aa!Roaaar!");
    }

    public function testJump()
    {
        $monkey = new Monkey();
        $lion = new Lion();
        $jump = new Jump();

        $monkey->accept($jump);
        $this->expectOutputString("Jumped 20 feet high! on to the tree!");

        $lion->accept($jump);
        $this->expectOutputString("Jumped 20 feet high! on to the tree!Jumped 7 feet! Back on the ground!");
    }
}