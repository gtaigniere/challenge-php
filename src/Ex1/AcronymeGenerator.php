<?php


namespace Ex1;

/**
 * Créez une fonction qui prend en argument une string et qui retourne les initiales de chaque mot en majuscule.
 * Ne considérer que les caractères alphabétiques.
 * Ainsi : 'Une chaîne 2 caractère !' doit renvoyer 'UCC'
 * @package Ex1
 */
class AcronymeGenerator
{
    public function generate(string $value): string
    {
        $chaine = '';
        if (!empty($value)) {
            $mots = explode(" ", $value);
            foreach ($mots as $mot) {
                if (preg_match('#[a-zA-Zéèêëàâïîôöùûü\-]+#', $mot)) {
                    $chaine .= strtoupper($mot[0]);
                }
            }
        }
        return $chaine;
    }
}
