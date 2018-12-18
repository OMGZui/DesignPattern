<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 10:50
 */

namespace DesignPattern\Behavioral\ChainOfResponsibility;

abstract class Account
{
    protected $successor;
    protected $balance;

    public function setNext(Account $account)
    {
        $this->successor = $account;
    }

    public function pay($money)
    {
        if ($this->canPay($money)) {
            return '支付成功' . get_called_class();
        } elseif ($this->successor) {
            return $this->successor->pay($money);
        } else {
            return '支付失败';
        }
    }

    public function canPay($money)
    {
        return $this->balance >= $money;
    }
}