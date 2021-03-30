<?php

use PHPUnit\Framework\TestCase;
use \App\RoundHole;
use \App\RoundPeg;
use \App\SquarePeg;
use \App\SquarePegAdapter;

class RoundHoleTest extends TestCase
{
    public function testRoundPegFitsInHoleRound()
    {
        $roundHole = new RoundHole(5);
        $roundPeg = new RoundPeg(5);

        $this->assertTrue($roundHole->fits($roundPeg));
    }

    // public function testSquarePegFitsInHoleRound()
    // {
    //     $roundHole = new RoundHole(8);
    //     $squarePeg = new SquarePeg(5);

    //     $this->assertTrue($roundHole->fits($squarePeg));
    // }

    public function testSquarePegWithAdapterFitsInHoleRound()
    {
        $roundHole = new RoundHole(4);

        $squarePeg = new SquarePeg(5.6);
        $squarePegAdapter = new SquarePegAdapter($squarePeg);

        $this->assertTrue($roundHole->fits($squarePegAdapter));
    }
}