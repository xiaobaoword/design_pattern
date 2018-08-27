<?php
/**
 * Oracle操作 包装产品类升级为工厂类
 */
namespace abstract_factory;

class OracleFactory implements DBFactoryInterface
{
    /**
     * 用户产品类
     * @return OracleUser
     */
    public function createUser()
    {
        return new OracleUser();
    }

    /**
     * 订单产品类
     * @return OracleOrder
     */
    public function createOrder()
    {
        return new OracleOrder();
    }

}