<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 15:35
 */

namespace DesignPattern\Behavioral\State;

class TextEditor
{
    protected $writingState;

    public function __construct(WritingState $writingState)
    {
        $this->writingState = $writingState;
    }

    public function setState(WritingState $writingState)
    {
        $this->writingState = $writingState;
    }

    public function type($words)
    {
        return $this->writingState->write($words);
    }
}