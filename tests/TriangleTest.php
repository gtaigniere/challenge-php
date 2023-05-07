<?php

namespace Ex3;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    /**
     * @var TriangleGenerator
     */
    private $triangle;

    public function setUp(): void
    {
        $this->triangle = new TriangleGenerator();
    }

    public function testNegatifLanceInvalidArgumentException()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->triangle->generate(-1);
    }

    public function test0RenvoieEmpty()
    {
        $this->assertEquals('', $this->triangle->generate(0));
    }

    public function test1RenvoieDoubleEtoile()
    {
        $this->assertEquals('**', $this->triangle->generate(1));

    }

    public function test10()
    {
        $result =
            '         **         ' . PHP_EOL .
            '        ****        ' . PHP_EOL .
            '       ******       ' . PHP_EOL .
            '      ********      ' . PHP_EOL .
            '     **********     ' . PHP_EOL .
            '    ************    ' . PHP_EOL .
            '   **************   ' . PHP_EOL .
            '  ****************  ' . PHP_EOL .
            ' ****************** ' . PHP_EOL .
            '********************';
        $this->assertEquals($result, $this->triangle->generate(10));
    }
}
