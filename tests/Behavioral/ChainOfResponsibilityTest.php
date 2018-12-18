<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 10:58
 */
namespace Tests\Behavioral;

use DesignPattern\Behavioral\ChainOfResponsibility\Bank;
use DesignPattern\Behavioral\ChainOfResponsibility\Bitcoin;
use DesignPattern\Behavioral\ChainOfResponsibility\Paypal;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    public function testChain()
    {
        $bank = new Bank(100);
        $paypal = new Paypal(200);
        $bitcoin = new Bitcoin(300);

        $bank->setNext($paypal);
        $paypal->setNext($bitcoin);

        $this->assertEquals("支付成功DesignPattern\Behavioral\ChainOfResponsibility\Bank", $bank->pay(25));
        $this->assertEquals("支付成功DesignPattern\Behavioral\ChainOfResponsibility\Paypal", $bank->pay(125));
        $this->assertEquals("支付成功DesignPattern\Behavioral\ChainOfResponsibility\Bitcoin", $bank->pay(259));
        $this->assertEquals("支付失败", $bank->pay(500));
    }
}