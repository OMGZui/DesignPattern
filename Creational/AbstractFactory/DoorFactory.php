<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 16:34
 */

namespace DesignPattern\Creational\AbstractFactory;

interface DoorFactory
{
    function makeDoor(): Door;
    function makeFittingExpert(): DoorFittingExpert;
}