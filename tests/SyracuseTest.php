<?php

namespace Ex2;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class SyracuseTest extends TestCase
{
    /**
     * @var SyracuseGenerator
     */
    private $syracuse;

    public function setUp(): void
    {
        $this->syracuse = new SyracuseGenerator();
    }

    public function testMoinsUnLanceException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->syracuse->generate(-1);
    }

    public function test0LanceException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->syracuse->generate(0);
    }

    public function test1Renvoie1()
    {
        $this->assertEquals('1', $this->syracuse->generate(1));
    }

    public function test25Renvoie2576381958298844221134175226134020105168421()
    {
        $this->assertEquals('25 76 38 19 58 29 88 44 22 11 34 17 52 26 13 40 20 10 5 16 8 4 2 1', $this->syracuse->generate(25));
    }
}
