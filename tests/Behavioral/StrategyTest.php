<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:53
 */

namespace Tests\Behavioral;

use DesignPattern\Behavioral\Strategy\BubbleSortStrategy;
use DesignPattern\Behavioral\Strategy\QuickSortStrategy;
use DesignPattern\Behavioral\Strategy\Sorter;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testCommand()
    {
        $data = [];
        $sorter = new Sorter(new BubbleSortStrategy());
        $this->assertEquals('使用冒泡排序', $sorter->sort($data));

        $sorter = new Sorter(new QuickSortStrategy());
        $this->assertEquals('使用快速排序', $sorter->sort($data));

    }
}