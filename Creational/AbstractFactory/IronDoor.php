<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 16:31
 */
namespace DesignPattern\Creational\AbstractFactory;

class IronDoor implements Door
{
    public function getDescription()
    {
        return '我是铁门';
    }
}