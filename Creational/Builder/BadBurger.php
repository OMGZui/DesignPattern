<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 11:20
 */

namespace DesignPattern\Creational\Builder;

class BadBurger
{
    protected $size;
    protected $cheese = false;
    protected $pepperoni = false;
    protected $lettuce = false;
    protected $tomato = false;

    public function __construct($size, $cheese = true, $pepperoni = true, $tomato = true, $lettuce = true)
    {
        $this->size = $size;
        $this->cheese = $cheese;
        $this->pepperoni = $pepperoni;
        $this->lettuce = $lettuce;
        $this->tomato = $tomato;
    }

    public function get($name)
    {
        return $this->$name;
    }
}