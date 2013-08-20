<?php
echo PHP_EOL . "#####################" . PHP_EOL;
echo "#  PHP LOC Results  #" . PHP_EOL;
echo "#####################" . PHP_EOL;
echo shell_exec(__DIR__ . '/../vendor/bin/phploc ../module') . PHP_EOL;


echo PHP_EOL . "####################" . PHP_EOL;
echo "#  PHP MD Results  #" . PHP_EOL;
echo "####################" . PHP_EOL;
echo shell_exec(__DIR__ . '/../vendor/bin/phpmd ../module text design,codesize,unusedcode,naming') . PHP_EOL;

echo PHP_EOL . "#####################" . PHP_EOL;
echo "#  PHP CPD Results  #" . PHP_EOL;
echo "#####################" . PHP_EOL;
echo shell_exec(__DIR__ . '/../vendor/bin/phpcpd ../module') . PHP_EOL;

echo PHP_EOL . "########################" . PHP_EOL;
echo "#  PHP Depend Results  #" . PHP_EOL;
echo "########################" . PHP_EOL;
echo shell_exec(__DIR__ . '/../vendor/bin/pdepend --summary-xml=../data/php_depend/summary.xml --jdepend-chart=../data/php_depend/jdepend.svg --overview-pyramid=../data/php_depend/pyramid.svg ../module') . PHP_EOL;


