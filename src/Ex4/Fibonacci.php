<?php


namespace Ex4;

use InvalidArgumentException;

/**
 * Enoncé tiré de l'ouvrage Liber Abaci de Leonardo Pisano écrit en 1202.
 * Possédant initialement un couple de lapins, combien de couples obtient-on en douze mois si chaque couple engendre
 * tous les mois un nouveau couple à compter du second mois de son existence ? »
 *
 * La suite de Fibonacci est une suite d'entiers dans laquelle chaque terme est la somme des deux termes qui le précèdent.
 * Elle commence généralement par les termes 0 et 1 et ses premiers termes sont : 0, 1, 1, 2, 3, 5, 8, 13, 21, etc.
 *
 * Créer une fonction qui prend un argument de type int, cela correspondra à la durée en mois
 * de la reproduction des lapins, la fonction doit retourner le nombre de couples.
 * @package Ex4
 */
class Fibonacci
{
    const FIBONACCI_0 = 0;
    const FIBONACCI_1 = 1;

    const MSG_NOMBRE_NEGATIF = 'Vous devez fournir un entier positif ou nul';

    /**
     * Permet de calculer le n-ième terme de la suite de fibonacci tel que calculer(n) = calculer(n-1) + calculer(n-2)
     * @param int $n durée en mois
     * @throws InvalidArgumentException si le $n est inférieur à 0
     * @return int nombre de couples après n mois
     */
    public function calculer(int $n): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException(self::MSG_NOMBRE_NEGATIF);
        }
        if ($n == 0) {
            return self::FIBONACCI_0;
        }
        if ($n == 1) {
            return self::FIBONACCI_1;
        }
        $result = 0;
        $nbMoins1 = self::FIBONACCI_1;
        $nbMoins2 = self::FIBONACCI_0;
        for ($i = 2; $i <= $n; $i++) {
            $result = $nbMoins2 + $nbMoins1;
            $nbMoins2 = $nbMoins1;
            $nbMoins1 = $result;
        }
        return $result;
    }
    // Même fonction avec la récursivité
    public function calculer(int $n): int
    {
        if ($n < 0) {
            throw new InvalidArgumentException(self::MSG_NOMBRE_NEGATIF);
        }
        if ($n == 0) {
            return self::FIBONACCI_0;
        }
        if ($n == 1) {
            return self::FIBONACCI_1;
        } else {
            return calculer($n - 1) + calculer($n - 2);
        }
    }
}