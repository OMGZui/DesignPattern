<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:53
 */

namespace Tests\Behavioral;

use DesignPattern\Behavioral\Iterator\RadioStation;
use DesignPattern\Behavioral\Iterator\StationList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testIterator()
    {
        $stationList = new StationList();
        $_stationList = new StationList();

        $this->assertEquals($stationList, $_stationList);

        $stationList->add(new RadioStation(89));
        $stationList->add(new RadioStation(101));
        $stationList->add(new RadioStation(102));
        $stationList->add(new RadioStation(103));

        $_stationList->add(new RadioStation(89));
        $_stationList->add(new RadioStation(101));
        $_stationList->add(new RadioStation(103));

        foreach ($stationList as $k => $item) {
            if ($k == 0) {
                $this->assertEquals(new RadioStation(89), $item);
            }
        }

        $this->assertEquals(array_values($stationList->remove(new RadioStation(102))), array_values($_stationList->get()));
    }
}