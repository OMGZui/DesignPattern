<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 15:22
 */
namespace DesignPattern\Behavioral\Strategy;

class QuickSortStrategy implements SortStrategy
{
    public function sort($data)
    {
        return '使用快速排序';
    }
}