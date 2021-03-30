<?php

namespace App;

class SquarePegAdapter 
{
    private $squarePeg;

    public function __construct(SquarePeg $squarePeg)
    {
        $this->squarePeg = $squarePeg;
    }

    // radius = width / √2
    public function getRadius(): float
    {
        return $this->squarePeg->getWidth() / sqrt(2);
    }
}