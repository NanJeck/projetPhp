<?php

/**
 * Permet de facilité le
 * debug de notre app.
 * @param $debug
 * @return void
 */
function debug($debug): void
{
    echo "<pre>";
    print_r($debug);
    echo "</pre>";
}

/**
 * Permet d'afficher un résumé
 * de x mots à partir d'un texte.
 * @param $text
 * @return void
 */
function summarize($text, $limit = 70) {
    # Suppression des balises HTML
    $string = strip_tags($text);
    
      # Si mon $string est > $limit (80)
      if(strlen($string) > $limit) {

        # Je coupe ma chaine à la $limit
        $stringCut = substr($string, 0, $limit);

        # Je veux m'assurer de ne pas couper de mot en plein milieu
        $string = substr($stringCut, 0, strrpos($stringCut, ' '));

    }

    return $string . '...';
}