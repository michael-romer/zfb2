<?php
echo exec(__DIR__ . '/../vendor/bin/doctrine-module orm:schema-tool:drop --force') . PHP_EOL;
echo exec(__DIR__ . '/../vendor/bin/doctrine-module orm:schema-tool:create') . PHP_EOL;
echo exec(__DIR__ . '/../vendor/bin/doctrine-module data-fixture:import') . PHP_EOL;