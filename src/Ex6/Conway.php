<?php


namespace Ex6;


use InvalidArgumentException;

/**
 * Le premier terme de la suite de Conway est posé comme égal à 1. Chaque terme de la suite se construit en annonçant
 * le terme précédent, c'est-à-dire en indiquant combien de fois chacun de ses chiffres se répète.
 * Écrire une fonction qui prend en argument un nombre de ligne et affiche toutes ces lignes de la suite de Conway.
 * @package Ex6
 *
 */
class Conway
{
    const SEPARATOR = PHP_EOL;

    const MSG_VALEUR_NON_NUMERIQUE = 'Vous devez fournir une valeur numérique';

    /**
     * Permet d'afficher les nbLines de la suite de conway pour le chiffre start, chaque ligne étant séparée par le
     * caractère self::SEPARATOR
     * @param int $nbLines le nombre de ligne de la suite à afficher
     * @param string $start l'élément de début
     * @return string les lignes de la suite séparées par le caractère self::SEPARATOR
     * @throws InvalidArgumentException Si start n'est pas numérique
     */
    public function draw(int $nbLines, string $start = '1'): string
    {
        if (!is_numeric($start)) {
            throw new InvalidArgumentException(self::MSG_VALEUR_NON_NUMERIQUE);
        }
        $lines[] = $start;
        for ($i = 1; $i < $nbLines; $i++) {
            $lines[] = $this->lineConway($lines[$i - 1]);
        }
        return join(self::SEPARATOR, $lines);
    }

    /**
     * Permet d'afficher la ligne de la suite de conway pour le nombre $number
     * @param string $chaine le nombre, au format chaîne de caractères, de la suite à afficher
     * @return string la ligne de la suite correspondant au nombre dans $chaine
     */
    public function lineConway(string $chaine): string
    {
        $result = '';
        $counter = 1;
        $val = $chaine[0];
        $length = strlen($chaine);
        for ($i = 1; $i < $length; $i++) {
            if ($val != $chaine[$i]) {
                $result .= $counter . $val;
                $val = $chaine[$i];
                $counter = 1;
            } else {
                $counter++;
            }
        }
        return $result . $counter . $val;
    }

}
