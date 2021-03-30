<?php

namespace App;

class RoundHole
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

    public function fits($roundPeg): bool
    {
        return $this->radius >= $roundPeg->getRadius();
    }
}