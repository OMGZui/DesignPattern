<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:50
 */
namespace DesignPattern\Behavioral\Command;

class On implements Command
{
    protected $bulb;
    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function exec()
    {
        return $this->bulb->on();
    }

    public function undo()
    {
        return $this->bulb->off();
    }


    public function redo()
    {
        return $this->exec();
    }

}