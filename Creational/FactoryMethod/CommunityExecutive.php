<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/13
 * Time: 15:53
 */

namespace DesignPattern\Creational\FactoryMethod;

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        return '运营相关问题';
    }
}