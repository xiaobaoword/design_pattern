<?php

// 银联
class Yinlian
{
    public function doAction($param)
    {
        $name = $param['name'];
        $money = $param['money'];
        echo $name . '使用银联支付,支付金额' . $money;
    }
}
