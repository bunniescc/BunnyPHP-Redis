<?php

namespace Bunny\Cache;

use BunnyPHP\Cache;
use Redis;

class RedisCache implements Cache
{

    /**
     * @var $redis Redis
     */
    private Redis $redis;

    public function __construct($config = [])
    {
        $this->redis = new Redis();
        $host = $config['host'] ?? '127.0.0.1';
        $port = $config['port'] ?? 6379;
        $this->redis->connect($host, $port);
        if (isset($config['password'])) $this->redis->auth($config['password']);
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