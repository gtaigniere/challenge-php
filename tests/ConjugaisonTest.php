<?php

namespace Ex7;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ConjugaisonTest extends TestCase
{
    /**
     * @var Conjugaison
     */
    private $conjugaison;

    protected function setUp(): void
    {
        $this->conjugaison = new Conjugaison();
    }


    /**
     * Si le verbe est 'programmer' alors doit conjuguer le verbe
     */
    public function testProgrammer()
    {
        $result =
            'je programme' . PHP_EOL .
            'tu programmes' . PHP_EOL .
            'il programme' . PHP_EOL .
            'nous programmons' . PHP_EOL .
            'vous programmez' . PHP_EOL .
            'ils programment';
        $this->assertEquals($result, $this->conjugaison->conjuguer('programmer'));
    }

    /**
     * Si le verbe est 'manger' alors doit conjuguer le verbe manger en rajoutant un 'e' à la 1ère personne du pluriel
     */
    public function testManger()
    {
        $result =
            'je mange' . PHP_EOL .
            'tu manges' . PHP_EOL .
            'il mange' . PHP_EOL .
            'nous mangeons' . PHP_EOL .
            'vous mangez' . PHP_EOL .
            'ils mangent';
        $this->assertEquals($result, $this->conjugaison->conjuguer('manger'));
    }


    public function testVerbePas1erGroupe()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->conjugaison->conjuguer('finir');
    }
}
