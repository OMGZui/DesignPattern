<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 16:33
 */
namespace DesignPattern\Creational\AbstractFactory;

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        return '我可以修铁门';
    }
}