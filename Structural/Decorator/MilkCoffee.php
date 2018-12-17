<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 15:42
 */
namespace DesignPattern\Structural\Decorator;

class MilkCoffee implements Coffee
{
    protected $coffee;
    public function __construct(Coffee $coffee)
    {
     $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription(). '+牛奶';
    }
}