<?php

namespace Bunny\Cache;

use BunnyPHP\Cache;
use Redis;

class RedisCache implements Cache
{

    /**
     * @var $redis Redis
     */
    private $redis;

    public function __construct($config = [])
    {
        $this->redis = new Redis();
        $host = isset($config['host']) ? $config['host'] : '127.0.0.1';
        $port = isset($config['port']) ? $config['port'] : 6379;
        $this->redis->connect($host, $port);
    }

    public function get(string $key, $expire = 0)
    {
        return $this->redis->get($key);
    }

    public function has(string $key, $expire = 0): bool
    {
        if ($expire > 0) {
            return $this->redis->ttl($key) != -1;
        }
        return $this->redis->exists($key);
    }

    public function set(string $key, $value, $expire = 0)
    {
        $this->redis->set($key, $value);
        if ($expire > 0) {
            $this->redis->expire($key, $expire);
        }
    }

    public function del(string $key)
    {
        $this->redis->del($key);
    }
}