<?php
/**
 * 策略工厂类
 */
namespace strategy;

class StrategyFind
{
    private $strategy_mode;

    /**
     * 初始时，传入具体的策略对象
     * @param $mode
     */
    public function __construct($mode)
    {
        $this->strategy_mode = $mode;
    }

    /**
     * 执行打折算法
     * @param $money
     */
    public function get($money)
    {
        $this->strategy_mode->doAction($money);
    }
}