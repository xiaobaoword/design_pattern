<?php
namespace factory_method;

/**
 * 微信产品类转为工厂类
 * Class WeiXinFactory
 * @package factory_method
 */
class WeiXinFactory implements PayFactoryInterface
{
    public function createMode()
    {
        return new WeiXin();
    }
}