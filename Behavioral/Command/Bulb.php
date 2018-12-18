<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:46
 */
namespace DesignPattern\Behavioral\Command;

class Bulb
{
    public function on()
    {
        return '开灯';
    }

    public function off()
    {
        return '关灯';
    }
}