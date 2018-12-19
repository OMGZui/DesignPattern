<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 14:46
 */
namespace DesignPattern\Behavioral\Visitor;

interface AnimalOperation
{
    function visitMonkey(Monkey $monkey);
    function visitLion(Lion $lion);
}