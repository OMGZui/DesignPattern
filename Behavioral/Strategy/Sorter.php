<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 15:23
 */

namespace DesignPattern\Behavioral\Strategy;

class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sortStrategy)
    {
        $this->sorter = $sortStrategy;
    }

    public function sort($data)
    {
        return $this->sorter->sort($data);
    }
}