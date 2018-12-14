<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 15:33
 */
namespace DesignPattern\Structural\Adapter;

class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}