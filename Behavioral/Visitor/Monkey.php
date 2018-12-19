<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 14:47
 */
namespace DesignPattern\Behavioral\Visitor;

class Monkey implements Animal
{
    public function shout()
    {
        echo 'Ooh oo aa aa!';
    }

    public function accept(AnimalOperation $animalOperation)
    {
        $animalOperation->visitMonkey($this);
    }
}