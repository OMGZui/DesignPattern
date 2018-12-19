<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/19
 * Time: 15:36
 */
namespace Tests\Behavioral;

use DesignPattern\Behavioral\State\DefaultText;
use DesignPattern\Behavioral\State\LowerCase;
use DesignPattern\Behavioral\State\TextEditor;
use DesignPattern\Behavioral\State\UpperCase;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testState()
    {
        $editor = new TextEditor(new DefaultText());
        $this->assertEquals('First Line', $editor->type('First Line'));

        $editor->setState(new UpperCase());
        $this->assertEquals('SECOND LINE', $editor->type('Second Line'));

        $editor->setState(new LowerCase());
        $this->assertEquals('third line', $editor->type('Third Line'));
    }
}