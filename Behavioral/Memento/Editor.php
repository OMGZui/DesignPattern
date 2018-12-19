<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 10:53
 */

namespace DesignPattern\Behavioral\Memento;

class Editor
{
    protected $context = '';
    public function add($context)
    {
        $this->context = $this->context . ' ' . $context;
    }

    public function getContent()
    {
        return $this->context;
    }

    public function save()
    {
        return new EditorMemento($this->context);
    }

    public function restore(EditorMemento $editorMemento)
    {
        $this->context = $editorMemento->getContent();
    }
}