<?php

namespace App;

class RoundHole
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

    public function fits(PegInterface $roundPeg): bool
    {
        return $this->radius >= $roundPeg->getRadius();
    }
}