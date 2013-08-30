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
    )
);
