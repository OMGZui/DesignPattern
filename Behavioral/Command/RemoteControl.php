<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:52
 */

namespace DesignPattern\Behavioral\Command;

class RemoteControl
{
    public function submit(Command $command)
    {
        return $command->exec();
    }
}