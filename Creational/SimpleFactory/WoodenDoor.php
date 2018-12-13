<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 14:52
 */
namespace DesignPattern\Creational\SimpleFactory;

class WoodenDoor implements Door
{
    protected $height;
    protected $width;

    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }
}