<?php

namespace Ex1;

use PHPUnit\Framework\TestCase;

class AcronymeTest extends TestCase
{

    /**
     * @var AcronymeGenerator
     */
    private $acronyme;

    public function setUp(): void
    {
        $this->acronyme = new AcronymeGenerator();
    }

    /**
     * Si value est vide, alors la fonction generate renvoie vide
     */
    public function testChaineVideRenvoieChaineVide()
    {
        self::assertEmpty($this->acronyme->generate(''));
    }

    /**
     * Si value vaut 'Une chaîne de caractère' alors generate renvoie 'UCDC'
     */
    public function testUneChaineDeCaractereRenvoieUCDC()
    {
        $this->assertEquals('UCDC', $this->acronyme->generate('Une chaîne de caractère'));
    }

    /**
     * Si value vaut 'Une chaîne 2 caractère !' alors generate renvoie 'UCC'
     */
    public function testUneChaine2CaractereRenvoieUCC()
    {
        $this->assertEquals('UCC', $this->acronyme->generate('Une chaîne 2 caractère !'));
    }

    /**
     * Si value vaut 'Une chaîne 2 carac-tère !' alors generate renvoie 'UCC'
     */
    public function testUneChaine2CaracTirettereRenvoieUCC()
    {
        $this->assertEquals('UCC', $this->acronyme->generate('Une chaîne 2 carac-tère !'));
    }
}
