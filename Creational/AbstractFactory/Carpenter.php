<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 16:33
 */
namespace DesignPattern\Creational\AbstractFactory;

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        return '我可以修实木门';
    }
}