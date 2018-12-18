<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 10:25
 */
namespace DesignPattern\Structural\Proxy;

class LabDoor implements Door
{
    public function open()
    {
        return '开门';
    }

    public function close()
    {
        return '关门';
    }
}