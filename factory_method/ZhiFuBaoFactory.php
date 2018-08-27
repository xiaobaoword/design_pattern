<?php
namespace factory_method;

/**
 * 支付宝产品类转工厂类
 * Class ZhiFuBaoFactory
 * @package factory_method
 */
class ZhiFuBaoFactory implements PayFactoryInterface
{
    public function createMode()
    {
        return new ZhiFuBao();
    }
}