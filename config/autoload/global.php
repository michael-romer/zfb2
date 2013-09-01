<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'params' => array(
                    'host'     => 'localhost',
                    'user'     => 'root',
                    'password' => '',
                    'dbname'   => 'app'
                )
            )
        ),
        'configuration' => array(
            'orm_default' => array(
                'metadata_cache'    => 'array',
                'query_cache'       => 'array',
                'result_cache'      => 'array',
            )
        )
    ),
    'elasticsearch' => array(
        'connection' => array(
            'params' => array(
                'host' => 'localhost',
                'port' => '9200'
            )
        )
    )
);