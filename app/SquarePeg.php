<?php

namespace App;

class SquarePeg
{
    private $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }

    public function getWidth(): float
    {
        return $this->width;
    }
}