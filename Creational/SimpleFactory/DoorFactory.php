<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 14:54
 */
namespace DesignPattern\Creational\SimpleFactory;

class DoorFactory
{
    public static function makeDoor($width, $height)
    {
        return new WoodenDoor($width, $height);
    }
}