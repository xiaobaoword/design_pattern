<?php
namespace abstract_factory;

// 银联
class Yinlian implements PayInterface
{
    public function doAction($param)
    {
        $name = $param['name'];
        $money = $param['money'];
        echo $name . '使用银联支付,支付金额' . $money;
    }

    /**
     * 记录日志
     */
    public function payLog()
    {

    }

    /**
     * 发送消息
     */
    public function sendNews()
    {

    }
}
