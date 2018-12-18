<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 10:27
 */
namespace DesignPattern\Structural\Proxy;

class SecuredDoor
{
    protected $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password = '')
    {
        if ($this->auth($password)) {
            return $this->door->open();
        }else {
            return '你是谁';
        }
    }

    public function auth($password)
    {
        return $password === '123456';
    }

    public function close()
    {
        return $this->door->close();
    }

}