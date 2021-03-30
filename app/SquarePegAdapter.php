<?php

namespace App;

class SquarePegAdapter 
{
    private $squarePeg;

    public function __construct(SquarePeg $squarePeg)
    {
        $this->squarePeg = $squarePeg;
    }

    public function getRadius(): float
    {
        return $this->squarePeg->getWidth() / sqrt(2);
    }
}