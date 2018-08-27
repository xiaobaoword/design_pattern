<?php
/**
 * MySQL操作 包装产品类升级为工厂类
 */
namespace abstract_factory;

class MysqlFactory implements DBFactoryInterface
{
    /**
     * 用户产品类
     * @return MysqlUser
     */
    public function createUser()
    {
        return new MysqlUser();
    }

    /**
     * 用户产品类
     * @return MysqlOrder
     */
    public function createOrder()
    {
        return new MysqlOrder();
    }

}