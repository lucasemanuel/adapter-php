<?php

namespace App;

class RoundPeg
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float 
    {
        return $this->radius;
    }
}