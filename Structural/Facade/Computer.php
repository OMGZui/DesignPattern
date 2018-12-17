<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/17
 * Time: 16:06
 */
namespace DesignPattern\Structural\Facade;

class Computer
{
    public function getElectricShock()
    {
        return "Ouch!";
    }

    public function makeSound()
    {
        return "Beep beep!";
    }

    public function showLoadingScreen()
    {
        return "Loading..";
    }

    public function bam()
    {
        return "Ready to be used!";
    }

    public function closeEverything()
    {
        return "Bup bup bup buzzzz!";
    }

    public function sooth()
    {
        return "Zzzzz";
    }

    public function pullCurrent()
    {
        return "Haaah!";
    }
}