<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 14:45
 */
namespace DesignPattern\Behavioral\Visitor;

interface Animal
{
    function accept(AnimalOperation $animalOperation);
}