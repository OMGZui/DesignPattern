<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 15:55
 */

namespace DesignPattern\Creational\FactoryMethod;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        return $interviewer->askQuestions();
    }
}