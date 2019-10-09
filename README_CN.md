# BunnyPHP Redis缓存组件

[![Version](https://img.shields.io/packagist/v/ivanlulyf/bunnyphp-redis.svg?color=orange&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-redis)
[![Total Downloads](https://img.shields.io/packagist/dt/ivanlulyf/bunnyphp-redis.svg?color=brightgreen&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-redis)
![License](https://img.shields.io/packagist/l/ivanlulyf/bunnyphp-redis.svg?color=blue&style=flat-square)

[English](README.md) | 中文

## 安装

```shell
composer require ivanlulyf/bunnyphp-redis
```

## 配置

```php
"cache" =>[
    "name" => "bunnyphp.redis",
    "host" => "127.0.0.1",          // 替换成你的redis服务器地址
    "port" => 6379                  // 替换成你的redis服务器端口
],
```