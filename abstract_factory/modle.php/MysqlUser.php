<?php
/**
 * MySQL 用户产品类具体操作
 */
namespace abstract_factory;

class MysqlUser
{
    /**
     * 查询操作
     */
    public function select()
    {
        echo '订单表查询';
    }

    /**
     * 插入操作
     */
    public function insert()
    {
        echo '订单表插入';
    }
}