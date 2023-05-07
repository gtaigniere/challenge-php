<?php

namespace Ex4;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    /**
     * @var Fibonacci
     */
    private $fibonacci;

    public function setUp(): void
    {
        $this->fibonacci = new Fibonacci();
    }

    /**
     * Doit lancer une exception si n < 0
     */
    public function testEntierNegatif()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->fibonacci->calculer(-1);
    }

    /**
     * Doit retourner 0 si n = 0
     */
    public function testFibonacci0Renvoie0()
    {
        $this->assertEquals(0, $this->fibonacci->calculer(0));
    }

    /**
     * Doit retourner 1 si n = 1
     */
    public function testFibonacci1Renvoie1()
    {
        $this->assertEquals(1, $this->fibonacci->calculer(1));
    }

    /**
     * Doit retourner 1 si n = 2
     */
    public function testFibonacci2Renvoie1()
    {
        $this->assertEquals(1, $this->fibonacci->calculer(2));
    }

    /**
     * Doit retourner 144 si n = 12
     */
    public function testFibonacci12Renvoie144()
    {
        $this->assertEquals(144, $this->fibonacci->calculer(12));
    }

}
