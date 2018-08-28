<?php
/**
 * 抽象活动算法类
 */
namespace strategy;

abstract class StrategyAbstract
{
    /**
     * 具体活动算法方法
     * @return mixed
     */
    public abstract function doAction($money);
}