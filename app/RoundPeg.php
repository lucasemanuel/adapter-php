<?php

namespace App;

class RoundPeg implements PegInterface
{
    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): int 
    {
        return $this->radius;
    }
}