<?php

namespace Application\Initializer;

interface ElasticsearchAware
{
    public function getEs();
    public function setEs($es);
}
