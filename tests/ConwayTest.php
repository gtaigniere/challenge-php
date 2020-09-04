<?php

namespace Ex6;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ConwayTest extends TestCase
{

    /**
     * @var Conway
     */
    private $conway;

    public function setUp(): void
    {
        $this->conway = new Conway();
    }

    /** Doit retourner '1' si '1' est fourni */
    public function testShouldReturn11If1Given()
    {
        $this->assertEquals('1', $this->conway->draw('1'));
    }

    /** doit retourner
     * '2
     *  12'
     * si nbLines = 2 et start = '2'
     */
    public function testShouldReturn12If2Given()
    {
        $this->assertEquals('2' . Conway::SEPARATOR . '12', $this->conway->draw(2, '2'));
    }

    /**
     * Doit retourner '' si nblines = 1 et start = ''
     */
    public function testShouldReturnVoidWhenVoidGiven()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->conway->draw(1, '');
    }

    /**
     * doit retourner les 15ères lignes de la suite de conway si nbLines = 15
     */
    public function testForStart1AndLines15()
    {
        $expected =
            '1' . Conway::SEPARATOR .
            '11' . Conway::SEPARATOR .
            '21' . Conway::SEPARATOR .
            '1211' . Conway::SEPARATOR .
            '111221' . Conway::SEPARATOR .
            '312211' . Conway::SEPARATOR .
            '13112221' . Conway::SEPARATOR .
            '1113213211' . Conway::SEPARATOR .
            '31131211131221'. Conway::SEPARATOR .
            '13211311123113112211' . Conway::SEPARATOR .
            '11131221133112132113212221' . Conway::SEPARATOR .
            '3113112221232112111312211312113211' . Conway::SEPARATOR .
            '1321132132111213122112311311222113111221131221' . Conway::SEPARATOR .
            '11131221131211131231121113112221121321132132211331222113112211'. Conway::SEPARATOR .
            '311311222113111231131112132112311321322112111312211312111322212311322113212221';
        $this->assertEquals($expected, $this->conway->draw(15));
    }
}
