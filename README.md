# Flysystem Adapter for Redis

[![Latest Version](https://img.shields.io/github/release/danhunsaker/flysystem-redis.svg?style=flat-square)](https://github.com/danhunsaker/flysystem-redis/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/danhunsaker/flysystem-redis/master.svg?style=flat-square)](https://travis-ci.org/danhunsaker/flysystem-redis)
[![Total Downloads](https://img.shields.io/packagist/dt/danhunsaker/flysystem-redis.svg?style=flat-square)](https://packagist.org/packages/danhunsaker/flysystem-redis)

This is a [Redis](https://redis.io/) adapter for [Flysystem](http://flysystem.thephpleague.com/).

## Installation

Composer is the best way, as with all of Flysystem!

```bash
composer require danhunsaker/flysystem-redis
```

## Usage

The usual.  Create a client instance, pass it to the adapter, and pass that to the filesystem:

```php
use Predis\Client;
use League\Flysystem\Filesystem;
use Danhunsaker\Flysystem\Redis\RedisAdapter;

$redis = new Client();
$adapter = new RedisAdapter($redis);
$filesystem = new Filesystem($adapter);
```

If Predis's assumed defaults of `127.0.0.1` and `6379` for host and port (respectively) aren't sufficient, you can pass your own values, just as you normally would when setting up Predis elsewhere in your projects:

```php
use Predis\Client;
use League\Flysystem\Filesystem;
use Danhunsaker\Flysystem\Redis\RedisAdapter;

$redis = new Client([
    'scheme' => 'tcp',
    'host'   => '10.0.0.1',
    'port'   => 6379,
]);
$adapter = new RedisAdapter($redis);
$filesystem = new Filesystem($adapter);
```

See the Predis docs for more on how to set it up...

And head to [GitHub](https://github.com/danhunsaker/flysystem-redis) for everything else.