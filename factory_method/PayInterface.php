<?php
namespace factory_method;
/**
 * Interface PayInterface
 * 定义支付Api规范接口
 */
interface PayInterface
{
    /**
     * 发起扣款
     * @return mixed
     */
    public function doAction($param);

    /**
     * 记录日志
     * @return mixed
     */
    public function payLog();

    /**
     * 发送短信
     * @return mixed
     */
    public function sendNews();
}