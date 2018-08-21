<?php

// 银联
class WeiXin
{
    public function doAction($param)
    {
        $name = $param['name'];
        $money = $param['money'];
        echo $name . '使用微信支付,支付金额' . $money;
    }
}
