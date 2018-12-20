<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/20
 * Time: 09:59
 */
namespace DesignPattern\Behavioral\TemplateMethod;

abstract class Builder
{
    final public function build()
    {
        $this->test();
        $this->lint();
        $this->assemble();
        $this->deploy();
    }
    abstract function test();
    abstract function lint();
    abstract function assemble();
    abstract function deploy();
}