<?php
/**
 * 定义需要实例产品类的工厂类接口数量
 */
namespace abstract_factory;

interface DBFactoryInterface
{
    /**
     * 用户工厂类接口
     * @return mixed
     */
    public function createUser();

    /**
     * 订单工厂类接口
     * @return mixed
     */
    public function createOrder();
}