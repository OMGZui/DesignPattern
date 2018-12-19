<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 15:32
 */

namespace DesignPattern\Behavioral\State;

class LowerCase implements WritingState
{
    public function write($words)
    {
        return strtolower($words);
    }
}