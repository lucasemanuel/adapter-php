<?php

use PHPUnit\Framework\TestCase;
use \App\RoundHole;
use \App\RoundPeg;

class RoundHoleTest extends TestCase
{
    public function testRoundPegFitsInHoleRound()
    {
        $roundHole = new RoundHole(5);
        $roundPeg = new RoundPeg(5);

        $this->assertTrue($roundHole->fits($roundPeg));
    }
}