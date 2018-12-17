<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 16:10
 */

namespace DesignPattern\Structural\Facade;

class ComputerFacade
{
    protected $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $testTurnOn = '';
        $testTurnOn .= $this->computer->getElectricShock();
        $testTurnOn .= $this->computer->makeSound();
        $testTurnOn .= $this->computer->showLoadingScreen();
        $testTurnOn .= $this->computer->bam();
        return $testTurnOn;
    }

    public function turnOff()
    {
        $testTurnOff = '';
        $testTurnOff .= $this->computer->closeEverything();
        $testTurnOff .= $this->computer->pullCurrent();
        $testTurnOff .= $this->computer->sooth();
        return $testTurnOff;
    }
}