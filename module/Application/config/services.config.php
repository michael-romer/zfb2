<?php
return array(
    'factories' => array(
        'elasticsearch' => function ($sm) {
            $config = $sm->get('config');
            $srv = new \Elastica\Client(
                array(
                    'host' => $config['elasticsearch']['connection']['params']['host'],
                    'port' => $config['elasticsearch']['connection']['params']['port']
                )
            );
            return $srv;
        },
        'doctrine.cache.my_memcache' => function ($sm) {
            $cache = new \Doctrine\Common\Cache\MemcacheCache();
            $memcache = new \Memcache();
            $config = $sm->get('config');
            $memcache->connect(
                $config['memcache']['host'],
                $config['memcache']['port']
            );
            $cache->setMemcache($memcache);
            return $cache;
        }
    )
);
