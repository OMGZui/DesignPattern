<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 17:16
 */
namespace DesignPattern\Structural\FlyWeight;

class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])){
            // 缓存
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }

    public function getTeas()
    {
        return $this->availableTea;
    }
}