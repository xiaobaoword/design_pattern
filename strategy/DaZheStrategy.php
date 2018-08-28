<?php
/**
 * 打折算法产品类
 */
namespace strategy;

class DaZheStrategy extends StrategyAbstract
{
    /**
     * 具体算法实现
     * @param $money
     * @return mixed|void
     */
    public function doAction($money)
    {
        echo '打折算法：原价'. $money .'元';
    }
}