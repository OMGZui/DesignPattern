<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 10:52
 */
namespace DesignPattern\Behavioral\Memento;

class EditorMemento
{
    protected $context;
    public function __construct($content)
    {
        $this->context = $content;
    }

    public function getContent()
    {
        return $this->context;
    }
}