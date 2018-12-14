<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 15:34
 */
namespace DesignPattern\Structural\Adapter;

class WildDogAdapter implements Lion
{
    protected $wildDog;
    public function __construct(WildDog $wildDog)
    {
        $this->wildDog = $wildDog;
    }

    public function roar()
    {
        // 调包
        return $this->wildDog->bark();
    }
}