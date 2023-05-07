<?php


namespace Ex2;

use InvalidArgumentException;

/**
 *
 * Créer une fonction qui prend comme argument n'importe quel nombre entier supérieur à zéro,
 * si le nombre est pair le diviser par 2, si le nombre est impair le multiplier par 3 et ajoutez 1.
 * Continuer l'opération sur le nombre obtenu jusqu'à ce que le résultat soit égal à 1
 * Au final la fonction doit retourner la série des nombres
 * Doit Lancer une InvalidArgumentException si le nombre fourni est inférieur ou égal à 0
 * Ansi, generate(25) renvoie '25 76 38 19 58 29 88 44 22 11 34 17 52 26 13 40 20 10 5 16 8 4 2 1'
 * @package Ex2
 */
class SyracuseGenerator
{
    /**
     * Caractère qui sépare chaque terme de la suite
     */
    const SEPARATOR = ' ';

    const ERREUR_NOMBRE_NEGATIF_OU_NULL = 'Vous devez fournir un nombre strictement positif';

    /**
     * Affiche tous les nombres de la suite de syracuse séparé par le caractère SEPARATOR à partir de la valeur val
     * @param int $val entier strictement positif
     * @return string
     * @throws InvalidArgumentException si val est <=0
     */
    public function generate(int $val): string
    {
        $result = $val;
        if ($val <= 0) {
            throw new InvalidArgumentException(self::ERREUR_NOMBRE_NEGATIF_OU_NULL);
        }
        while($val != 1) {
            $val = ($val % 2 == 0) ? $val / 2 : $val * 3 + 1;
            $result .= self::SEPARATOR . $val;
        }
        return $result;
    }
}
