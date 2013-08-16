<?php
$folders = array('../module/Application', '../config');
$path = implode(' ', $folders);
echo shell_exec('phpcs -v --standard=PSR2 ' . $path) . PHP_EOL;