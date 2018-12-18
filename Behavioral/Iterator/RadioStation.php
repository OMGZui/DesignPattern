<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 16:24
 */

namespace DesignPattern\Behavioral\Iterator;

class RadioStation
{
    protected $frequency;

    public function __construct($frequency)
    {
        $this->frequency = $frequency;
    }

    public function getFrequency()
    {
        return $this->frequency;
    }
}