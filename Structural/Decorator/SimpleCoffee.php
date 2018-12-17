<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 15:39
 */
namespace DesignPattern\Structural\Decorator;

class SimpleCoffee implements Coffee
{
    public function getCost()
    {
       return 10;
    }

    public function getDescription()
    {
        return "简单咖啡";
    }
}