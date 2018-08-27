<?php
namespace factory_method;

/**
 * 银联产品类转工厂类
 * Class YinLianFactory
 * @package factory_method
 */
class YinLianFactory implements PayFactoryInterface
{
    public function createMode()
    {
        return new Yinlian();
    }
}