<?php
namespace factory;

/**
 * 缓存公共方法
 **/
class Cache
{
    public static function cacheMode()
    {
        return new RedisMode();
    }
}
