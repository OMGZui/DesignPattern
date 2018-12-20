<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:53
 */

namespace Tests\Behavioral;

use DesignPattern\Behavioral\TemplateMethod\AndroidBuilder;
use DesignPattern\Behavioral\TemplateMethod\IosBuilder;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testTemplateMethod1()
    {
        $android = new AndroidBuilder();
        $android->build();

        $this->expectOutputString("Running android testsLinting the android codeAssembling the android buildDeploying android build to server");
    }

    public function testTemplateMethod2()
    {
        $ios = new IosBuilder();
        $ios->build();

        $this->expectOutputString("Running ios testsLinting the ios codeAssembling the ios buildDeploying ios build to server");
    }

}