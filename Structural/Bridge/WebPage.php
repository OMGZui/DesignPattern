<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/12/14
 * Time: 16:05
 */
namespace DesignPattern\Structural\Bridge;

interface WebPage
{
    public function __construct(Theme $theme);
    function getContent();
}