<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 11:23
 */

namespace DesignPattern\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo get_class($subject) . '被更新';
    }

}