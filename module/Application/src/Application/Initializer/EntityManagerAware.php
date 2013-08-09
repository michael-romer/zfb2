<?php

namespace Application\Initializer;

interface EntityManagerAware
{
    public function getEm();
    public function setEm($m);
}
