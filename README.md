# BunnyPHP Redis Cache Component

[![Version](https://img.shields.io/packagist/v/ivanlulyf/bunnyphp-redis.svg?color=orange&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-redis)
[![Total Downloads](https://img.shields.io/packagist/dt/ivanlulyf/bunnyphp-redis.svg?color=brightgreen&style=flat-square)](https://packagist.org/packages/ivanlulyf/bunnyphp-redis)
![License](https://img.shields.io/packagist/l/ivanlulyf/bunnyphp-redis.svg?color=blue&style=flat-square)

English | [中文](README_CN.md)

## Install

```shell
composer require ivanlulyf/bunnyphp-redis
```

## Configure

```php
"cache" =>[
    "name" => "bunnyphp.redis",
    "host" => "127.0.0.1",          // replace to your redis server address
    "port" => 6379                  // replace to your redis server port
],
```