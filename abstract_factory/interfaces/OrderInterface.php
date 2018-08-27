<?php
/**
 * 订单产品类具体操作接口
 */
namespace abstract_factory;

interface OrderInterface
{
    /**
     * 查询操作接口
     * @return mixed
     */
    public function select();

    /**
     * 插入操作接口
     * @return mixed
     */
    public function insert();
}