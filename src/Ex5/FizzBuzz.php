<?php


namespace Ex5;

use InvalidArgumentException;

/**
 * Créer une fonction qui prend en paramètre un interval (min, max) et qui affiche la suite de nombre comme suit :
 * quand le nombre est un multiple de 3 la fonction doit retourner « fizz », quand le nombre est un multiple de 5
 * la fonction doit retourner « buzz » et quand le nombre est un multiple de 15 la fonction doit retourner « fizzbuzz »
 * dans tous les autres cas elle doit retourner le nombre.
 * ex: 12Fizz4BuzzFizz78Fizz pour un interval compris entre 1 et 9
 * @package Ex5
 */
class FizzBuzz
{
    const MSG_INTERVAL_INVALIDE = 'Vous devez fournir un interval valide';

    /**
     * Affiche tous les nombres 'FizzBuzz' compris dans l'interval $min et $max
     * @param int $min plus petite valeur
     * @param int $max plus grande valeur
     * @return string La suite de nombre FizzBuzz compris entre $min et $max
     * @throws InvalidArgumentException Si l'interval fourni n'est pas valide (min > max)
     */
    public function range(int $min, int $max): string
    {
    $result = '';
        if ($min <= $max) {
            for ($i = $min; $i <= $max; $i++) {
                switch($i) {
                    case($i % 15 == 0):
                        $result .= 'FizzBuzz';
                        break;
                    case($i % 5 == 0):
                        $result .= 'Buzz';
                        break;
                    case($i % 3 == 0):
                        $result .= 'Fizz';
                        break;
                    default:
                        $result .= $i;
                }
            }
            return $result;
        } else {
            throw new InvalidArgumentException(self::MSG_INTERVAL_INVALIDE);
        }
    }
}