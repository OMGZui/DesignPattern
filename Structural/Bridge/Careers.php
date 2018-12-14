<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 16:07
 */

namespace DesignPattern\Structural\Bridge;

class Careers implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Careers页面颜色是{$this->theme->getColor()}";
    }
}