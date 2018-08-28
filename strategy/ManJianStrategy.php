<?php
/**
 * 满减算法产品类
 */
namespace strategy;

class ManJianStrategy extends StrategyAbstract
{
    public function doAction($money)
    {
        echo '满减算法：原价'. $money .'元';
    }
}