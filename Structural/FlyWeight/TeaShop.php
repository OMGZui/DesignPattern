<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 17:18
 */

namespace DesignPattern\Structural\FlyWeight;

class TeaShop
{
    protected $orders;
    protected $teaMaker;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder($teaType, $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        $testMsg = '';
        foreach ($this->orders as $table => $tea) {
            $testMsg .= "Serving tea to table# " . $table;
        }
        return $testMsg;
    }

    public function getOrders()
    {
        return $this->orders;
    }
}