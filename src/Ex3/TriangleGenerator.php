<?php


namespace Ex3;

use InvalidArgumentException;

/**
 * Créer une fonction qui prend un argument de type int, cela déterminera la hauteur (en ligne)
 * d'un triangle isocèle rempli d'étoiles.
 * Ainsi :
 * - generate(0) :
 * ''
 *
 * - generate(1) :
 * '**'
 *
 * - generate(10) :
 * '         **         '
 * '        ****        '
 * '       ******       '
 * '      ********      '
 * '     **********     '
 * '    ************    '
 * '   **************   '
 * '  ****************  '
 * ' ****************** '
 * '********************'
 * NB : Il est possible d'utiliser les fonctions suivantes :
 * @link str_repeat https://www.php.net/manual/fr/function.str-repeat.php
 * @link str_pad https://www.php.net/manual/fr/function.str-pad.php
 * @package Ex3
 */
class TriangleGenerator
{
    const STAR = '**';
    const SPACE = ' ';
    const MSG_NB_NEGATIF = 'Vous devez fournir un nombre positif';
    const LINE_JUMP = PHP_EOL;

    /**
     * Affiche un triangle isocèle de côté $taille par affichage successif du caractère self::STAR
     * @param int $taille taille du côté du triangle
     * @return string contient le triangle dans son ensemble, chaque ligne étant séparée par le caractère self::LINE_JUMP
     * @throws InvalidArgumentException si $taille < 0
     */
    public function generate(int $taille): string
    {
        $result = '';
        if ($taille < 0) {
            throw new InvalidArgumentException(self::MSG_NB_NEGATIF);
        } elseif (!empty($taille)) {
            $basDuTriangle = str_repeat(self::STAR, $taille);
            $nbCharByLine = strlen($basDuTriangle);
            for ($i = 1; $i <= $nbCharByLine / 2; $i++) {
                if ($i == 1) {
//                    $result .= str_repeat(self::SPACE, $nbCharByLine / 2 - $i) .
//                        self::STAR .
//                        str_repeat(self::SPACE, $nbCharByLine / 2 - $i);
                    $result .= str_pad(self::STAR, $nbCharByLine, " ", STR_PAD_BOTH);
                } else {
//                    $result .= self::LINE_JUMP . str_repeat(self::SPACE, $nbCharByLine / 2 - $i) .
//                        str_repeat(self::STAR, $i) .
//                        str_repeat(self::SPACE, $nbCharByLine / 2 - $i);
                    $result .= self::LINE_JUMP . str_pad(str_repeat(self::STAR, $i), $nbCharByLine, " ", STR_PAD_BOTH);
                }
            }
        }
        return $result;
    }
}