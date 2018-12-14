<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 15:36
 */

namespace Tests\Structural;

use DesignPattern\Structural\Adapter\WildDog;
use DesignPattern\Structural\Adapter\WildDogAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $wildDog = new WildDog();
        $wildDogAdapter = new WildDogAdapter($wildDog);
        $this->assertEquals($wildDog->bark(), $wildDogAdapter->roar());
    }
}