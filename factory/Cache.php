<?php
namespace factory;

/**
 * 缓存公共方法
 **/
class Cache
{
    public static function cacheMode($type)
    {
        switch ($type) {
            case 'Redis':
                return new RedisMode();
                break;
            case 'Memca';
                return new MemcachedMode();
                break;
            default:
                return false;
                break;
        }
    }
}
