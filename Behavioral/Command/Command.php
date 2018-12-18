<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:48
 */
namespace DesignPattern\Behavioral\Command;

interface Command
{

    function exec();
    function undo();
    function redo();
}