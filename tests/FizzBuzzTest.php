<?php

namespace Ex5;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testShouldReturn1If1Given()
    {
        $this->assertEquals('1', $this->fizzBuzz->range(1, 1));
    }

    public function testShouldReturn2If2Given()
    {
        $this->assertEquals('2', $this->fizzBuzz->range(2, 2));
    }

    public function testShouldReturnFizzIf3Given()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->range(3, 3));
    }

    public function testShouldReturnBuzzIf5Given()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->range(5, 5));
    }

    public function testShouldReturnFizzBuzzIf15Given()
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->range(15, 15));
    }

    public function testShouldReturn12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829FizzBuzz3132Fizz34BuzzFizzIf1And36IsGiven()
    {
        $this->assertEquals('12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829FizzBuzz3132Fizz34BuzzFizz', (new FizzBuzz())->range(1, 36));
    }

    public function testShouldReturnVoidIfMinGreaterThanMax()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->assertEquals('', $this->fizzBuzz->range(5,4));
    }

}
