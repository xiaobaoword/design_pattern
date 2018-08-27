<?php
/**e
 * Oracle 用户产品类具体操作
 */
namespace abstract_factory;

class OracleUser
{
    /**
     * 查询操作
     */
    public function select()
    {
        echo '用户表查询';
    }

    /**
     * 插入操作
     */
    public function insert()
    {
        echo '用户表插入';
    }
}