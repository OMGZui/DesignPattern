<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 14:47
 */
namespace DesignPattern\Behavioral\Visitor;

class Lion implements Animal
{
    public function roar()
    {
        echo 'Roaaar!';
    }

    public function accept(AnimalOperation $animalOperation)
    {
        $animalOperation->visitLion($this);
    }
}