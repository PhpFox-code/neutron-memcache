<?php

namespace Neutron\Memcache;

return [
    'session.drivers' => [
        'memcache'  => MemcacheSessionSaveHandler::class,
        'memcached' => MemcachedSessionSaveHandler::class,
    ],
    'cache.drivers'   => [
        'memcache'  => MemcacheCacheStorage::class,
        'memcached' => MemcachedCacheStorage::class,
    ],
    'cache.adapters'  => [
        'cache.memcached' => [
            'driver'         => 'memcached',
            'port'           => 11211,
            'timeout'        => 1,
            'persistent'     => true,
            'retry_interval' => 15,
            'servers'        => ['127.0.0.1'],
        ],
        'cache.memcache'  => [
            'driver'         => 'memcache',
            'port'           => 11211,
            'timeout'        => 1,
            'persistent'     => true,
            'retry_interval' => 15,
            'servers'        => ['127.0.0.1'],
        ],
    ],
];