<?php
// 支付Api文件 Pay.php

/**
 * 支付接口统一Api
 **/
class Pay
{
    /**
     * @param $mode 调用方法
     * @param $param 参数
     * @return mixed
     */
    public function payAction($mode, $param)
    {
        $mode_class = new $mode;
        return call_user_func_array([$mode_class, 'doAction'], [$param]);
    }
}
