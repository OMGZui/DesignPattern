<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 15:47
 */

namespace Tests\Structural;

use DesignPattern\Structural\Bridge\About;
use DesignPattern\Structural\Bridge\AquaTheme;
use DesignPattern\Structural\Bridge\Careers;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testBridge()
    {
        $msgAbout = "About页面颜色是水母色";
        $msgCareers = "Careers页面颜色是水母色";

        $aquaTheme = new AquaTheme();
        $about = new About($aquaTheme);
        $careers = new Careers($aquaTheme);

        $this->assertEquals($about->getContent(), $msgAbout);
        $this->assertEquals($careers->getContent(), $msgCareers);
    }
}