<?php

// 银联
class ZhiFuBao
{
    public function doAction($param)
    {
        $name = $param['name'];
        $money = $param['money'];
        echo $name . '使用支付宝支付,支付金额' . $money;
    }
}
