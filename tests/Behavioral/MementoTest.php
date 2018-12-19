<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/18
 * Time: 15:53
 */

namespace Tests\Behavioral;

use DesignPattern\Behavioral\Memento\Editor;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testMemento()
    {
        $editor = new Editor();

        $editor->add('111');
        $editor->add('222');
        $saved = $editor->save();

        $editor->add('333');
        $this->assertSame('111 222 333', ltrim($editor->getContent()));

        $editor->restore($saved);
        $this->assertSame('111 222', ltrim($editor->getContent()));
    }
}