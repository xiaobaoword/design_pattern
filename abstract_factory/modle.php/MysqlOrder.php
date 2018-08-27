<?php
/**
 * MySQL 订单产品类具体操作
 */
namespace abstract_factory;

class MysqlOrder
{
    /**
     * 查询具体操作
     */
    public function select()
    {
        echo '订单表查询';
    }

    /**
     * 插入具体操作
     */
    public function insert()
    {
        echo '订单表插入';
    }
}