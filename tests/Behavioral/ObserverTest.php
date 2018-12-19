<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:53
 */

namespace Tests\Behavioral;

use DesignPattern\Behavioral\Observer\User;
use DesignPattern\Behavioral\Observer\UserObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testNotify()
    {
        $observer = new UserObserver();
        $user = new User();
        $user->attach($observer);
        $user->property = 123;
        $this->expectOutputString("DesignPattern\Behavioral\Observer\User被更新");
    }

    public function testAttachDetach()
    {
        $observer = new UserObserver();
        $user = new User();

        try {
            $reflection = new \ReflectionProperty($user, 'observers');
            $reflection->setAccessible(true);
            $observers = $reflection->getValue($user);

            $this->assertInstanceOf('SplObjectStorage', $observers);
            $this->assertFalse($observers->contains($observer));

            $user->attach($observer);
            $this->assertTrue($observers->contains($observer));

            $user->detach($observer);
            $this->assertFalse($observers->contains($observer));

        } catch (\Exception $e) {

        }

        $user->attach($observer);
    }

    public function testUpdateCalling()
    {
        $user = new User();
        try {
            $observer = $this->createMock('SplObserver');
            $user->attach($observer);
            $observer->expects($this->once())
                ->method('update')
                ->with($user);

            $user->notify();
        } catch (\Exception $e) {

        }

    }
}